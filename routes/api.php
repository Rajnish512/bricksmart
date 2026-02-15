<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\BillingController;

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

Route::get('category', [AuthController::class, 'category']);
Route::get('product', [AuthController::class, 'product']);
Route::get('showcart', [AuthController::class, 'showcart']);
Route::post('login', [AuthController::class, 'login']);
Route::post('Seller', [AuthController::class, 'createSeller']);
Route::post('user', [AuthController::class, 'userid']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('pgResponse', [BillingController::class, 'pgResponse']);
Route::middleware('auth:sanctum')->group( function () {
	Route::post('logout', [AuthController::class, 'logout']);

    Route::resource('products', ProductsController::class);
    
});
