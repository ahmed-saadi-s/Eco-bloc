<?php

namespace App\Recommendations;

use App\Models\UserProductView;
use App\Models\UserProductPurchase;
use App\Models\Product;

class CustomRecommendationService
{
    public function getRecommendedProducts($userId, $limit = 5)
    {
        // Get products viewed by the user
        $viewedProducts = UserProductView::where('user_id', $userId)->pluck('product_id');

        // Get products purchased by the user
        $purchasedProducts = UserProductPurchase::where('user_id', $userId)->pluck('product_id');

        // Combine viewed and purchased products and remove duplicates
        $recommendedProducts = $viewedProducts->merge($purchasedProducts)->unique();

        // Exclude products already purchased by the user
        $excludeProducts = $purchasedProducts->merge($viewedProducts)->unique();

        // Find similar users based on viewed products
        $similarUsers = UserProductView::whereIn('product_id', $viewedProducts)
            ->where('user_id', '!=', $userId)
            ->select('user_id')
            ->distinct()
            ->get();

        $recommendations = [];

        // Calculate similarity and recommend products
        foreach ($similarUsers as $user) {
            $similarity = $this->calculateSimilarity($viewedProducts, $purchasedProducts, $user->user_id);
            $userViewedProducts = UserProductView::where('user_id', $user->user_id)->pluck('product_id');

            foreach ($userViewedProducts as $productId) {
                if (!in_array($productId, $excludeProducts->toArray())) {
                    if (isset($recommendations[$productId])) {
                        $recommendations[$productId] += $similarity; // Sum the similarities for each product
                    } else {
                        $recommendations[$productId] = $similarity; // Initialize the similarity if it doesn't exist
                    }
                }
            }
        }

        // Sort recommendations by similarity
        arsort($recommendations);

        // Return the top recommended products
        return Product::whereIn('id', array_slice(array_keys($recommendations), 0, $limit))->get();
    }

    private function calculateSimilarity($userViewedProducts, $userPurchasedProducts, $otherUserId)
    {
        // Get products viewed by the other user
        $otherUserViewedProducts = UserProductView::where('user_id', $otherUserId)->pluck('product_id');

        // Get products purchased by the other user
        $otherUserPurchasedProducts = UserProductPurchase::where('user_id', $otherUserId)->pluck('product_id');

        // Calculate cosine similarity for viewed products
        $viewedSimilarity = $this->cosineSimilarity($userViewedProducts, $otherUserViewedProducts);

        // Calculate cosine similarity for purchased products
        $purchasedSimilarity = $this->cosineSimilarity($userPurchasedProducts, $otherUserPurchasedProducts);

        // Weighted average of similarities (adjust weights as needed)
        $weightedSimilarity = 0.3 * $viewedSimilarity + 0.7 * $purchasedSimilarity;

        return $weightedSimilarity;
    }

    private function cosineSimilarity($set1, $set2)
    {
        $intersection = $set1->intersect($set2)->count();
        $magnitude1 = $set1->count();
        $magnitude2 = $set2->count();

        if ($magnitude1 == 0 || $magnitude2 == 0) {
            return 0;
        }

        return $intersection / sqrt($magnitude1 * $magnitude2);
    }
}
