<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products/{id}', function ($id) {
    $product = DB::table('products')->where('id', $id)->first();
    if (!$product) {
        abort(404, 'Không thấy sản phẩm');
    }

    return view('product.show', compact('product'));
})->name('product.show');

Route::get('/list', [ProductController::class, 'list'])->name('product.list');


