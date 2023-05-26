<?php

use App\Http\Controllers\WdfeatureController;
use App\Http\Controllers\WdgeneralController;
use App\Http\Controllers\WdoutletController;
use App\Http\Controllers\WdcareerController;
use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\WdgeneralController;
use App\Http\Controllers\WdadminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('wande');
});

Route::get('/Admin', [WdadminController::class,'index']);

// Manajemen Umum
Route::get('/Admin/umum/formtbh', [WdgeneralController::class,'create']);
Route::post('/Admin/umum/store', [WdgeneralController::class,'store']);
Route::get('/Admin/umum/formupd/{id}', [WdgeneralController::class,'edit']);
Route::put('/Admin/umum/update', [WdgeneralController::class,'update']);

// Manajemen Fitur
Route::get('/Admin/fitur/formtbh', [WdfeatureController::class,'create']);
Route::post('/Admin/fitur/store', [WdfeatureController::class,'store']);
Route::get('/Admin/fitur/formupd/{id}', [WdfeatureController::class,'edit']);
Route::put('/Admin/fitur/update', [WdfeatureController::class,'update']);

// Manajemen Outlet
Route::get('/Admin/kedai/formtbh', [WdoutletController::class,'create']);
Route::post('/Admin/kedai/store', [WdoutletController::class,'store']);
Route::get('/Admin/kedai/formupd/{id}', [WdoutletController::class,'edit']);
Route::put('/Admin/kedai/update', [WdoutletController::class,'update']);

// Manajemen Karir
Route::get('/Admin/karir/formtbh', [WdcareerController::class,'create']);
Route::post('/Admin/karir/store', [WdcareerController::class,'store']);
Route::get('/Admin/karir/formupd/{id}', [WdcareerController::class,'edit']);
Route::put('/Admin/karir/update', [WdcareerController::class,'update']);