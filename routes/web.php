<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\CvController;
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
Route::get('/skill/create',[SkillController::class,'index'])->name('get.skill.create');
Route::post('skill/create',[SkillController::class,'store'])->name('post.skill.create');
// Update
Route::get("/skill/update/{id}",[SkillController::class,'editForm']);
Route::post("/skill/update/{id}",[SkillController::class,'update']);
// Destroy
Route::get('/skill/delete/{id}',[SkillController::class,'delete']);
Route::get('/skill/list',[SkillController::class,'list'])->name('get.skill.list');

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

/* ------------------------------------CV ---------------------------------------- */
Route::get('/cv/create',[CvController::class,'index'])->name('get.cv.create');
Route::post('/cv/create',[CvController::class,'store'])->name('post.cv.create');

Route::get('/cv/update/{id}',[CvController::class,'editForm'])->name('get.cv.editForm');
Route::post('/cv/update/{id}',[CvController::class,'update'])->name('post.cv.update');

Route::get('/cv/delete/{id}',[CvController::class,'delete'])->name('get.cv.delete');

Route::get('/cv/list',[CvController::class,'list'])->name('get.cv.list');
Auth::routes();
