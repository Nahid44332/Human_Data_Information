<?php

use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/' , [FrontendController::class ,'index']);
Route::post('/data-store' , [FrontendController::class ,'dataStore']);

// Admin Auth
Route::get('/admin/login' , [AdminAuthController::class ,'loginForm']);

Auth::routes();
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
