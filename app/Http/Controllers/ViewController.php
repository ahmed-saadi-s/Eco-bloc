<?php

namespace App\Http\Controllers;

use App\Models\Order;
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
        $stores = Store::orderBy('id','DESC')->paginate(9);
        return view('stores',['stores'=>$stores]);
    }
    public function myOrders(){
       if(!auth()->check())
           abort(404);
       else
       {
           $orders = Order::with('details.product')->where('user_id', auth()->id())->get();
           $ordersData = [];

           foreach ($orders as $order) {
               foreach ($order->details as $detail) {
                   $ordersData[] = [
                       'product_name' => $detail->product->product_name,
                       'image' => $detail->product->image_path,
                       'quantity' => $detail->quantity,
                       'price' => $detail->price,
                       'status' => $detail->status,
                       'created_at' => $order->created_at,
                   ];
               }
           }

           return view('myOrders', ['ordersData' => $ordersData]);


       }
    }
    public function store($store_id){

        $products = Product::where('store_id',$store_id)->orderBy('id', 'DESC')->paginate(9);

        if(auth()->check()) {
            $recommendedProducts = $this->recommendationService->getRecommendedProducts(auth()->id());
            return view('product', compact('recommendedProducts', 'products'));
        }
        return view('product',with(['products' => $products]));
    }

}
