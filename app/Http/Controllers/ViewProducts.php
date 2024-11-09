<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\UserProductView;
use Illuminate\Http\Request;

class ViewProducts extends Controller
{
    public function productDetails($product_id)
    {

        $product = Product::with('images')->where('id', $product_id)->first();
        if (!$product) {
            abort(404);
        }
        $images = $product->images;
        if (auth()->check()) {
            $userProductView = UserProductView::where('user_id', auth()->id())
                ->where('product_id', $product_id)
                ->first();
            if ($userProductView) {
                // زيادة عدد الزيارات بواحد في كل زيارة
                $userProductView->increment('visit_count');
            } else {
                // إذا لم يكن هناك سجل، قم بإنشاء واحد
                UserProductView::create([
                    'user_id' => auth()->id(),
                    'product_id' => $product_id,
                    'visit_count' => 1,
                ]);
            }
        }



        return view('viewProduct', compact('product','images'));
    }

}

