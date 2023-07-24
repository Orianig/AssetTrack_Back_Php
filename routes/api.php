<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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
Route::get('/login', [AuthController::class, 'login']);

//USER CONTROLLER


// TEAMS CONTROLLER


//PROJECT CONTROLLER


//INVENTORY CONTROLLER


//PRODUCT CONTROLLER


//PROVIDER CONTROLLER