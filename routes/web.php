<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix("student")->group(function (){
    Route::get("/",[\App\Http\Controllers\StudentController::class,"listAll"]);
    Route::get("/create",[\App\Http\Controllers\StudentController::class,"create"]);
    Route::post("/create",[\App\Http\Controllers\StudentController::class,"store"])->name("create_product");
    Route::get("/edit/{product}",[\App\Http\Controllers\StudentController::class,"edit"]);
    Route::post("/edit/{product}",[\App\Http\Controllers\StudentController::class,"update"]);
    Route::post("/delete/{product}",[\App\Http\Controllers\StudentController::class,"delete"]);
});