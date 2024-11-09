<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\StorePayment;

use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryStore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $storeCount = Store::count();
        $productCount = Product::count();

        return view('admin.dashboard', compact('storeCount','productCount'));
    }


    public function viewStores()
    {
        $stores = Store::orderBy('id', 'DESC')->paginate(8);
        return view('admin.viewStores', ['stores' => $stores]);
    }

    public function financials()
    {
        $stores = Store::orderBy('id', 'DESC')->get();
        $financialData = [];

        foreach ($stores as $store) {

            $storePayment = StorePayment::where('store_id',$store->id)->first();
            $revenue = $storePayment->amount_due ;
            $financialData[] = [
                'store_id' => $store->id,
                'store_name' => $store->name,
                'revenue' => $revenue
            ];
        }

        return view('admin.financials', compact('financialData'));
    }
    public function payment(Request $request)
    {
        $amount = $request->input('amount');
        $storeId = $request->input('store_id');
        $payment = StorePayment::where('store_id', $storeId)->first(); // Assuming you have a model for StorePayment
        $payment->amount_due = $payment->amount_due - $amount;
        $payment->amount_paid = $payment->amount_paid + $amount;
        $payment->save(); // Correcting the method call
        return redirect()->back()->with('success', 'Payment successful');
    }
    public function viewOrders($store_ID)
    {
        $orders = OrderDetail::where('store_id', $store_ID)->get();
        $amount_due = StorePayment::where('store_id', $store_ID)->first()->amount_due;
        $amount_paid = StorePayment::where('store_id', $store_ID)->first()->amount_paid;


        return view('admin.viewOrders', ['orders' => $orders, 'amount_due' => $amount_due,'amount_paid'=>$amount_paid]);
    }
    public function addStore()
    {
        $categories = Category::all();

        return view('admin.addStore',['categories'=>$categories]);
    }

    public function deleteStore()
    {
        $stores = Store::orderBy('id', 'DESC')->paginate(8);
        return view('admin.deleteStore', ['stores' => $stores]);
    }


    public function deleteStoreByID($id)
    {
        $store = Store::find($id);
        if(!$store)
        {
            abort(404);
        }
        $store->products()->delete();
        $store->manager()->delete();

        $store->delete();
        $ac= new AdminController();
        return $ac->deleteStore()->with('status','The store has been successfully deleted');
    }

    public function insertStore(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'storeName' => 'required|string|max:255',
            'storeLocation' => 'required|string|max:255',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // حجم الصورة لا يزيد عن 2MB
            'password' => 'required|min:8',
        ]);



        $manager= new User;
        $manager->FirstName=$request->firstName;
        $manager->LastName=$request->lastName;
        $manager->email=$request->email;
        $manager->phone=$request->phone;
        $manager->Location = $request->storeLocation;
        $manager->password = Hash::make($request->password);
        $manager->role="manager";
        $manager->save();




        $store = new Store;
        $store->name = $request->storeName;
        $store->location = $request->storeLocation;
        $image = $request->file('filename');
        $file_extension = $image->getClientOriginalExtension();
        $path = 'Images/Stores';
        $file_name = time() . '.' . $file_extension;
        $image->move($path, $file_name);
        $store->image = asset('Images/Stores/' . $file_name);
        $store->managerID=$manager->id;
        $store->save();
        foreach ($request->categories as $category) {
            $CategoryStore = new CategoryStore();
            $CategoryStore->store_id=$store->id;
            $CategoryStore->category_id=$category;
            $CategoryStore->save();
        }




        return redirect()->back()->with('status', 'Store has been added successfully.');
    }

    public function searchByID(){
        $input = $_GET['storeId'];
        $store = Store::where('id',$input)->first();
        if(!$store){
            return redirect()->back()->with('status','There are no stores for this id');
        }
        else
        return view('admin.searchStore',compact('store') );
}
}
