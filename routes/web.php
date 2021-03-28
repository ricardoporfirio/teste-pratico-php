<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;


Route::get("/",[SaleController::class,"index"])->name('home');
Route::get('produtos',[ProductController::class,'index'])->name('show-products');

Route::prefix('venda')->group(function () {
    Route::get('nova',[SaleController::class,'newSale'])->name('new-sale');
});