<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('items',[ItemController::class,'index']);
Route::get('items/{id}',[ItemController::class,'show']);
Route::post('items',[ItemController::class,'store']);
Route::put('items/{id}',[ItemController::class,'update']);
Route::delete('items/{id}',[ItemController::class,'destroy']);
Route::put('items/restore/{id}',[ItemController::class,'restore']);