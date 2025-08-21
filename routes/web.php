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
Route::get('/admin/human-list/edit/{id}', [AdminController::class, 'humanListEdit']);
Route::get('/admin/human-list/delete/{id}', [AdminController::class, 'humanListDelete']);
Route::post('/admin/human-list/update/{id}', [AdminController::class, 'humanListUpdate']);
Route::get('/admin/today-humans', [AdminController::class, 'todayHuman']);
Route::get('/admin/weekly-humans', [AdminController::class, 'weeklyHumans']);
Route::get('/admin/monthly-humans', [AdminController::class, 'monthlyHumans']);

// add Human
Route::get('/admin/add-human', [AdminController::class, 'addHumans']);
Route::post('/admin/store-human', [AdminController::class, 'storeHumans']);

//reports
Route::get('/admin/report/blood-group', [AdminController::class, 'bloodGroup']);
Route::get('/admin/report/age', [AdminController::class, 'age']);
Route::get('/admin/human/profile/{id}', [AdminController::class, 'humanProfile']);