<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;


Route::get("/",[SaleController::class,"index"])->name('home');

Route::prefix('produtos')->group(function () {
    Route::get('/',[ProductController::class,'index'])->name('show-products');
    Route::post('searchByName',[ProductController::class,'search'])->name('search-by-name');
    Route::post('searchByRef',[ProductController::class,'search'])->name('search-by-ref');
    Route::post('addProduct',[ProductController::class,'addProduct'])->name('add-product');
    Route::post('removeProduct',[ProductController::class,'removeProduct'])->name('remove-product');
});

Route::prefix('venda')->group(function () {
    Route::get('nova',[SaleController::class,'newSale'])->name('new-sale');
});