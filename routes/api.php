<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    Route::post('logout',[AuthController::class,'logout']);

    Route::get('products',[ProductController::class,'index']);
    Route::get('products/{id}/show',[ProductController::class,'show']);

    Route::post('products/add',[ProductController::class,'store']);

    Route::post('products/{id}/update',[ProductController::class,'update']);

    Route::delete('products/{id}/destroy',[ProductController::class,'destroy']);
});


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


