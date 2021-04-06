<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curdController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[curdController::class,'display']);


Route::get('addData',[curdController::class,'index']);
Route::post('addData',[curdController::class,'addData']);
Route::get('edit/{id}',[curdController::class,'edit']);
Route::post("update",[curdController::class,'update']);

Route::get('delete/{id}',[curdController::class,'delete']);