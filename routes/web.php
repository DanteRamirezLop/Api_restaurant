<?php

use App\Http\Controllers\Api\CatergoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransactionPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('category',[CatergoryController::class,'index'])->name('api.categories');
Route::apiResource('categories',CatergoryController::class)->names('api.categories');
Route::apiResource('products',ProductController::class)->names('api.products');
Route::apiResource('units',UnitController::class)->names('api.units');
Route::apiResource('users',UserController::class)->names('api.users');
Route::apiResource('transaction',TransactionPaymentController::class)->names('api.transactionPayment');


