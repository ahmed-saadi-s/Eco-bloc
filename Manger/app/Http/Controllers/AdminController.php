<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
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

    public function addStore()
    {
        return view('admin.addStore');
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
