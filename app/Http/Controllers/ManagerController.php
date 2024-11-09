<?php

namespace App\Http\Controllers;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\StorePayment;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard(){
        $store = Store::where('managerID', auth()->id())->first();

        // التحقق من وجود المتجر
        if (!$store) {
            return redirect()->back()->with('error', 'Store not found!');
        }

        // استرجاع جميع الطلبات المرتبطة بالمتجر
        $orders = OrderDetail::where('store_id', $store->id)
            ->whereNotIn('status', ['pending'])
            ->get();

        // إرجاع العرض مع الطلبات
        return view('manager.managerDashboard', compact('orders'));

    }
    public function addProduct(){
        return view('manager.addProduct');
    }
    public function orders(){
        // استرجاع المتجر المرتبط بالمدير المسجل الدخول
        $store = Store::where('managerID', auth()->id())->first();

        // التحقق من وجود المتجر
        if (!$store) {
            return redirect()->back()->with('error', 'Store not found!');
        }

        // استرجاع جميع الطلبات المرتبطة بالمتجر
        $orders = OrderDetail::where('store_id', $store->id)
            ->where('status', ['pending'])
            ->get();

        // إرجاع العرض مع الطلبات
        return view('manager.orders', compact('orders'));
    }
    public function updateOrderStatus(Request $request, $orderId) {
        $status = $request->input('order_status');

        $order = OrderDetail::findOrFail($orderId);
        $order->status = $status;
        $order->save();
        $payment=new StorePayment();
        if ($order->status == 'Delivered')
        {
            $total = $order->price * $order->quantity;

            // 3. الحصول على سطر المتجر من جدول store_payment.
            $storePayment = StorePayment::where('store_id', $order->store_id)->first();

            // 4. إضافة نسبة 15% من سعر الطلب إلى amount_due للمتجر.
            $percentageToAdd = 0.15; // نسبة 15%
            $amountToAdd = $total * $percentageToAdd;
            $storePayment->amount_due += $amountToAdd;
            $storePayment->save();
        }


        return redirect()->back()->with('success', 'تم تحديث حالة الطلب وإضافة النسبة بنجاح.');
    }


    public function insertProduct(Request $request){

        $product = new Product;
        $product->product_name = $request['productName'];
        $product->description = $request['productDescription'];
        $product->quantity = $request['productQuantity'];
        $product->price = $request['productPrice'];
        $cover = $request->file('coverImage');
        $file_extension = $cover->getClientOriginalExtension();
        $path = 'Images/ProductCover';
        $file_name = time() . '.' . $file_extension;
        $cover->move($path, $file_name);
        $product->image_path = asset('Images/ProductCover/' . $file_name);
        $store = Store::where('managerID', $request->managerID)->first();
        $product->store_id = $store->id;

        $product->save();

        if ($request->hasFile('additionalImages')) {
            $counter = 0;
            foreach ($request->file('additionalImages') as $image) {
                $file_extension = $image->getClientOriginalExtension();
                $path = 'Images/Products';
                $file_name = time() . $counter . '.' . $file_extension;
                $image->move($path, $file_name);
                $photo = new ProductImage();
                $photo->image_path = asset('Images/Products/' . $file_name);
                $photo->product_id = $product->id;
                $photo->save();
                $counter++;
            }
        }

        // إعادة التوجيه بعد الإضافة
        return redirect('managerDashboard')->with('success', 'تم إضافة المنتج بنجاح.');

    }
    public function viewProducts($manager_ID){
        $store = Store::where('managerID', $manager_ID)->first();
        $products = Product::where('store_id',$store->id)->orderBy('id', 'DESC')->paginate(8);
        return view('manager.viewProducts',compact('products'));
    }
    public function searchProduct($productID){
        $product = Product::where('id',$productID)->first();
        if(!$product){
            return redirect('managerDashboard')->with('error', 'There are no product for this id');
        }
        return view('manager.searchProduct',compact('product'));
    }
    public function deleteProduct($productID)
    {

        $product = Product::find($productID);


        $product->images()->Delete();

        $product->delete();

        return back()->with('success','The Product has been successfully deleted');
    }
    public function deleteProd($productID)
    {
        $product = Product::find($productID);
        $store= Store::where('id',$product->store_id)->first();
        $products = Product::where('store_id',$store->id)->orderBy('id', 'DESC')->paginate(8);
        $product->images()->delete();
        $product->delete();
        return view('manager.viewProducts',compact('products'))->with('success','The Product has been successfully deleted');
    }
    public function updateAcceptStatus($orderId, $productId) {
        $order = OrderDetail::where('order_id', $orderId)
            ->where('product_id', $productId)
            ->update(['status' => 'accepted']);


        return redirect()->back()->with('success', 'تم قبول الطلب بنجاح!');
    }

    public function updateRejectStatus($orderId, $productId) {
        $order = OrderDetail::where('order_id', $orderId)
            ->where('product_id', $productId)
            ->update(['status' => 'rejected']);
        return redirect()->back()->with('error', 'تم رفض الطلب بنجاح!');
    }

}
