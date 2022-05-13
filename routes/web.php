<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
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
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->middleware(['auth'])->name('home');
Route::get('/logout',[\App\Http\Controllers\HomeController::class,'logout']);


Route::get('/skill/create',[SkillController::class,'index']);
Route::post('skill/create',[SkillController::class,'store']);

Route::get("/skill/update/{id}",[SkillController::class,'editForm']);
Route::post("/skill/update/{id}",[SkillController::class,'update']);

Route::get('/skill/delete/{id}',[SkillController::class,'delete']);
Route::get('/skill/list',[SkillController::class,'list']);
Auth::routes();
