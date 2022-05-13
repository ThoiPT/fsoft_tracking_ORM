<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RequestController;
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

/* ---------------------------------- SKILLS ----------------------------------- */
// Create
Route::get('/skill/create',[SkillController::class,'index']);
Route::post('skill/create',[SkillController::class,'store']);
// Update
Route::get("/skill/update/{id}",[SkillController::class,'editForm']);
Route::post("/skill/update/{id}",[SkillController::class,'update']);
// Destroy
Route::get('/skill/delete/{id}',[SkillController::class,'delete']);
Route::get('/skill/list',[SkillController::class,'list']);

/* ---------------------------------- REQUESTS ----------------------------------- */
// Create
Route::get('/request/create',[RequestController::class,'index']);
Route::post('/request/create',[RequestController::class,'store']);

// Update
Route::get('/request/update/{id}',[RequestController::class,'editForm']);
Route::post('/request/update/{id}',[RequestController::class,'update']);

// Destroy
Route::get('/request/delete/{id}',[RequestController::class,'delete']);
Route::get('/request/list',[RequestController::class,'list']);
Auth::routes();
