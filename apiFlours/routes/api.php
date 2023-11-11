<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post("register", [AuthController::class, 'register']);
Route::post("login", [AuthController::class, 'login']);


Route::middleware(['auth:sanctum'])->group(function () {
  Route::apiResource("usuarios", UserController::class);
  Route::apiResource("productos", ProductController::class);
  Route::apiResource("categorias", CategoryController::class);


  Route::post("logout", [AuthController::class, 'logout']);
});

