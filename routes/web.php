<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddProductImageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});

Route::name('index.')->group(function (){
    Route::get("/reg_form", function(){
        return view('Registration/item');
    })->name('registration');
    Route::get("/users_products", function(){
        return view('usersProducts');
    })->name('users.products');
});
Route::get('/reg_form/registration', [RegisterController::class, "store"])->name('register');

Route::resource('add_product', AddProductController::class);
Route::resource('add_image', AddProductImageController::class);
Route::resource('users', UserController::class);
Route::resource('users.products', UserProductsController::class)->shallow();


