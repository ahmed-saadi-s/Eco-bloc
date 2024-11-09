<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Models\UserProductPurchase;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; // تأكد من وجود مودل Order
use Illuminate\Support\Facades\Session; // استيراد الـ Session

use App\Models\Product;

use App\Models\OrderDetail;


class CartController extends Controller
{




    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "store_id" => $product->store_id,
                "product_id" => $productId, // حفظ الـ id فقط للمنتج
                "product_name" => $product->product_name,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function viewCart()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must log in first to view the shopping cart.');
        }



        return view('viewCart');
    }
    public function removeProduct($id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must log in first to view the shopping cart.');
        }

        // تحقق مما إذا كان المنتج موجودًا في السلة وإذا كان، قم بحذفه
        if (session()->has('cart') && array_key_exists($id, session('cart'))) {
            $cart = session('cart');
            unset($cart[$id]);
            session(['cart' => $cart]);
        }

        // تحديث عدد العناصر في السلة بعد الحذف
        $totalItems = count(session('cart', []));
        session(['cartCount' => $totalItems]);

        return redirect()->back()->with('success', 'Product removed successfully.');
    }

    public function updateCart(Request $request)
    {
        if ($request->has('products')) {
            $products = $request->input('products');

            foreach ($products as $productId => $quantity) {

                if (session()->has('cart') && array_key_exists($productId, session('cart'))) {
                    session(['cart.' . $productId . '.quantity' => $quantity]);
                }
            }

            return redirect()->back()->with('success', 'Cart updated successfully.');
        }

        return redirect()->back()->with('error', 'No products to update.');
    }



    public function purchase(Request $request)
    {
        // تحقق من تسجيل الدخول
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must log in first to purchase.');
        }

        // البيانات من الجدول المراد شراؤها
        $cartItems = session('cart', []);

        // قم بتحديث الكمية في الـ cart
        foreach ($cartItems as $productId => $product) {
            if ($request->has('quantity_' . $productId)) {
                $cartItems[$productId]['quantity'] = $request->input('quantity_' . $productId);
            }
        }

        // يمكنك تحديث الـ session مع البيانات المحدثة للـ cart
        session(['cart' => $cartItems]);


        return view('addressDetails')->with('success', 'تمت عملية الشراء بنجاح!');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function orderConfirmation(Request $request)
    {
        // هنا يمكنك إضافة التحقق من صحة البيانات المرسلة من النموذج (Validation)

        // الحصول على السلة من الجلسة
        $cart = Session::get('cart');

        // حفظ التفاصيل في جدول الطلبات (order)
        $order = new Order;
        $order->user_id = auth()->id(); // يفترض أن المستخدم مسجل الدخول
        $order->save();

        // حفظ تفاصيل السلة في جدول تفاصيل الطلب (order_details)
        foreach ($cart as $productId => $item) {
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id; // معرف الطلب الذي تم حفظه
            $orderDetail->product_id = $item['product_id'];
            $orderDetail->store_id = $item['store_id'];
            $orderDetail->price = $item['price'];
            $orderDetail->quantity = $item['quantity'];
            $orderDetail->name = $request->input('fullName'); // أفترضت أنك تريد حفظ الاسم هنا أيضًا لكن يمكنك تعديله
            $orderDetail->address = $request->input('address');
            $orderDetail->phone_number = $request->input('phone');
            $orderDetail->building = $request->input('building');
            $purshare= new UserProductPurchase();
            $purshare->user_id = auth()->id();
            $purshare->product_id = $item['product_id'];
            $purshare->save();
            $orderDetail->save();
        }

        // إزالة السلة من الجلسة إذا كنت ترغب في ذلك
        Session::forget('cart');

        // إعادة توجيه المستخدم إلى الصفحة الرئيسية مع رسالة نجاح
        return redirect('/')->with('success', 'Order successfully placed!');
    }


}
