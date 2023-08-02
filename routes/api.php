<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//CONTROLLERS
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;

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
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

//USER CONTROLLER
Route::get('/user/profile', [UserController::class, 'getUserProfile'])->middleware(['auth:sanctum']);
Route::put('/user/profile/updateProfile', [UserController::class, 'updateProfile'])->middleware(['auth:sanctum']);
Route::delete('user/deleteUser', [UserController::class, 'deleteUser'])->middleware(['auth:sanctum', 'isAdmin']);

// TEAMS CONTROLLER
Route::get('/user/teams', [TeamController::class, 'getUserTeams'])->middleware(['auth:sanctum']);

//PROJECT CONTROLLER
Route::get('/user/projects', [ProjectController::class, 'getUserProjects'])->middleware(['auth:sanctum']);

//INVENTORY CONTROLLER


//PRODUCT CONTROLLER


//PROVIDER CONTROLLER