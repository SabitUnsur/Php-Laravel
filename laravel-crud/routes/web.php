<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/urunler',[ProductController::class,'Index']);
Route::get('/urunler/ekle',[ProductController::class,'create']);
Route::post('/urunler/ekle',[ProductController::class,'store']);
Route::get('/urunler/duzenle/{id}',[ProductController::class,'edit']);
Route::post('/urunler/duzenle/{id}',[ProductController::class,'update']);
Route::delete('/urunler/sil/{id}',[ProductController::class,'destroy']);

