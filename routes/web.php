<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;


Route::get("/",[SaleController::class,"index"])->name('home');

Route::prefix('venda')->group(function () {
    Route::get('nova',[SaleController::class,'newSale'])->name('new-sale');
});