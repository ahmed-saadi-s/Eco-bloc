<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ViewProducts;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CartController;






Route::get('/', [ViewController::class,'home']);



Route::get('/home', [ViewController::class,'home']);
Route::get('/stores', [ViewController::class,'stores']);
Route::get('/myOrders', [ViewController::class,'myOrders']);
Route::get('/store/{store_id}', [ViewController::class,'store']);
Route::get('/product/{product_id}', [ViewProducts::class,'productDetails']);
Route::post('/addToCart/{product_id}', [CartController::class,'addToCart']);
Route::get('/viewCart', [CartController::class,'viewCart']);
Route::post('/updateCart', [CartController::class,'updateCart']);
Route::get('/removeProduct/{productId}', [CartController::class,'removeProduct']);

Route::post('/purchase', [CartController::class, 'purchase']);
Route::post('/orderConfirmation', [CartController::class, 'orderConfirmation']);







Route::group(['middleware' => 'Admin'], function () {
    Route::get('/admin', [AdminController::class,'dashboard']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/viewStores', [AdminController::class,'viewStores']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/financials', [AdminController::class,'financials']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/viewOrders/{storeID}', [AdminController::class,'viewOrders']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/addStore',[AdminController::class,'addStore']);

    Route::group(['middleware' => 'Admin'], function () {
        Route::get('/payment', [AdminController::class, 'payment']);
    });
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/deleteStore',[AdminController::class,'deleteStore']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::post('/insertStore', [AdminController::class, 'insertStore']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/deleteStore/{id}', [AdminController::class,'deleteStoreByID']);
});
Route::group(['middleware' => 'Admin'], function () {
    Route::get('/searchByID ', [AdminController::class,'searchByID']);
});


Route::group(['middleware' => 'Manager'], function () {
    Route::get('/managerDashboard', [ManagerController::class,'dashboard']);
});

Route::group(['middleware' => 'Manager'], function () {
    Route::post('/updateOrderStatus/{orderID}', [ManagerController::class,'updateOrderStatus']);
});



Route::group(['middleware' => 'Manager'], function () {
    Route::get('/addProduct', [ManagerController::class,'addProduct']);
});

Route::group(['middleware' => 'Manager'], function () {
    Route::post('/insertProduct', [ManagerController::class,'insertProduct']);
});
Route::group(['middleware' => 'Manager'], function () {
    Route::get('/viewProducts/{managerID}', [ManagerController::class,'viewProducts']);
});
Route::group(['middleware' => 'Manager'], function () {
    Route::get('/searchProductByID/{productID}', [ManagerController::class,'searchProduct']);
});

Route::group(['middleware' => 'Manager'], function () {
    Route::get('/deleteProductByID/{productID}', [ManagerController::class,'deleteProduct']);
});
Route::group(['middleware' => 'Manager'], function () {
    Route::get('/deleteProduct/{productID}', [ManagerController::class,'deleteProd']);
});

Route::group(['middleware' => 'Manager'], function () {
    Route::get('/orders', [ManagerController::class,'orders']);
});
Route::group(['middleware' => 'Manager'], function () {
    Route::get('/updateStatus/{orderId}/accept/{productId}', [ManagerController::class,'updateAcceptStatus']);
});Route::group(['middleware' => 'Manager'], function () {
    Route::get('/updateStatus/{orderId}/reject/{productId}', [ManagerController::class,'updateRejectStatus']);
});

Auth::routes();

