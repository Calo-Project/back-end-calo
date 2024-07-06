<?php

use App\Http\Controllers\Api\Customer\AuthCustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/login', [AuthCustomerController::class, 'login']);
Route::post('user/register', [AuthCustomerController::class, 'register']);
Route::post('user/logout', [AuthCustomerController::class, 'logout']);

Route::middleware(['auth:sanctum', 'pengguna'])->group(function (){
    Route::get('user/logged/', [AuthCustomerController::class, 'logged']);
});
