<?php

use App\Http\Controllers\WdcareerController;
use App\Http\Controllers\WdfeatureController;
use App\Http\Controllers\WdgeneralController;
use App\Http\Controllers\WdoutletController;
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
Route::get('/general',[WdgeneralController::class,'index']);
Route::get('/features',[WdfeatureController::class,'index']);
Route::get('/outlets',[WdoutletController::class,'index']);
Route::get('/careers',[WdcareerController::class,'index']);