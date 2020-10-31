<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\upload;
use App\Http\Controllers\SOP;
use App\Http\Controllers\Standar;
use App\Http\Controllers\Panduan; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("upload", [upload::Class,'upload']);

Route::get("SOP", [sop::Class,'SOP']);

Route::get("Standar", [standar::Class,'Standar']);

Route::get("Panduan", [panduan::Class,'Panduan']);

Route::post("/upload/proses",[UploadController::Class,'proses_upload ']);