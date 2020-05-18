<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return redirect('home');
});
Route::get('/home', function () {
    $products = Product::all();
    return view('home')->with('products', $products);
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/aboutUs', function () {
    return view('aboutus');
});
Route::get('/contactUs', function () {
    return view('contactus');
});

Route::get('/single/{id}', function (Request $request, $id) {
    $product = Product::where('id', $id)->with('images')->first();
    // dd($product);
    return view('product')->with('product', $product);
});


Route::get('/admin', 'AdminController@index');
Route::post('/admin/create', 'AdminController@create')->name('admin.create');
Route::post('/admin/update/{id}', 'AdminController@update')->name('admin.update');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
