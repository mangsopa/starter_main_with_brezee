<?php

use App\Http\Controllers\Api\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Api\Auth\RegisteredUserController;
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

// Route::post('auth/register', [AuthController::class, 'register']);
// Route::post('auth/login', [AuthController::class, 'login']);

Route::post('auth/register', [RegisteredUserController::class, 'store']);

Route::post('auth/login', [AuthenticatedSessionController::class, 'login'])->middleware('web');

Route::post('auth/login/v1', [AuthenticatedSessionController::class, 'store']);

// Input
Route::post('auth/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');