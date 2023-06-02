<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::get('/', function () {
    return response()->json([
        'message' => 'Hello world'
    ]);
});

// register route
Route::post('/register', [AuthController::class, 'register']);

// Mobile authentication
Route::post('/sanctum/token', [AuthController::class, 'token']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});