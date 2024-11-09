<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;
use App\Recommendations\CustomRecommendationService;

class ViewController extends Controller
{
    public function __construct(CustomRecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }



        // تمثيل النتائج في الواجهة أو استخدامها كما تحتاج



    public function home(){
        return view('home');
    }
    public function stores(){
        $stores = Store::orderBy('id','DESC')->paginate(8);
        return view('stores',['stores'=>$stores]);
    }
    public function store($store_id){

        $products = Product::where('store_id',$store_id)->orderBy('id', 'DESC')->paginate(8);

        if(auth()->check()) {
            $recommendedProducts = $this->recommendationService->getRecommendedProducts(auth()->id());
            return view('product', compact('recommendedProducts', 'products'));
        }
        return view('product',with(['products' => $products]));
    }

}
