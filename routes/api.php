<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//CONTROLLERS
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

//SERVER ACTIVE
Route::get('/', function () {
    return 'Welcome to the beginning of nothingness';
});


// AUTH CONTROLLER
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//USER CONTROLLER
Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth:sanctum']);
Route::put('/profile/update', [UserController::class, 'updateProfile'])->middleware(['auth:sanctum']);
Route::delete('/deleteUser', [UserController::class, 'deleteUser'])->middleware(['auth:sanctum', 'isAdmin']);

// TEAMS CONTROLLER


//PROJECT CONTROLLER


//INVENTORY CONTROLLER


//PRODUCT CONTROLLER


//PROVIDER CONTROLLER