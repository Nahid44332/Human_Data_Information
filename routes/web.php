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
Route::get('/human-identify' , [FrontendController::class ,'humanIdentify']);
Route::get('/human-details/{id}', [FrontendController::class, 'humanDetails']);


// Admin Auth
Route::get('/admin/login' , [AdminAuthController::class ,'loginForm']);
Route::get('/admin/logout' , [AdminAuthController::class ,'adminLogout']);

Auth::routes();
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
Route::get('/admin/human-list', [AdminController::class, 'humanList']);
Route::get('/admin/human-list/delete/{id}', [AdminController::class, 'humanListDelete']);
