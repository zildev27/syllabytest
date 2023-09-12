<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Product Routes
Route::group(['as' => 'products.', 'prefix' => 'products', 'middleware' => ['CORS']], function(){
    Route::get('/', [ProductsController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductsController::class, 'show'])->name('show');
    Route::delete('/{id}', [ProductsController::class, 'delete'])->name('delete');
    Route::post('/{id}', [ProductsController::class, 'store'])->name('store');
    Route::put('/{id}', [ProductsController::class, 'update'])->name('update');
});
