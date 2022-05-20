<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DepartmentController;
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
Route::get('/dashboard',[\App\Http\Controllers\HomeController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/logout',[\App\Http\Controllers\HomeController::class,'logout']);

/* ---------------------------------- SKILLS ----------------------------------- */
// Create
Route::get('/skill/create',[SkillController::class,'index'])->name('get.skill.create');
Route::post('skill/create',[SkillController::class,'store'])->name('post.skill.create');
// Update
Route::get("/skill/update/{id}",[SkillController::class,'editForm']);
Route::post("/skill/update/{id}",[SkillController::class,'update']);
// Destroy
Route::get('/skill/delete/{id}',[SkillController::class,'delete'])->name('get.skill.delete');
Route::get('/skill/list',[SkillController::class,'list'])->name('get.skill.list');

/* ---------------------------------- REQUESTS ----------------------------------- */
// Create
Route::get('/request/create',[RequestController::class,'index']);
Route::post('/request/create',[RequestController::class,'store']);

// Update
//Route::get('/request/{id}/update',[RequestController::class,'editForm']);
//Route::post('/request/{id}update',[RequestController::class,'update']);

Route::get('/request/update/{id}',[RequestController::class,'editForm']);
Route::post('/request/update/{id}',[RequestController::class,'update']);

// Destroy
Route::get('/request/delete/{id}',[RequestController::class,'delete']);
Route::get('/request/list',[RequestController::class,'list'])->name('get.request.list');

/* ------------------------------------CV ---------------------------------------- */
Route::get('/cv/create',[CvController::class,'index'])->name('get.cv.create');
Route::post('/cv/create',[CvController::class,'store'])->name('post.cv.create');

Route::get('/cv/update/{id}',[CvController::class,'editForm'])->name('get.cv.editForm');
Route::post('/cv/update/{id}',[CvController::class,'update'])->name('post.cv.update');

Route::get('/cv/delete/{id}',[CvController::class,'delete'])->name('get.cv.delete');
Route::get('/cv/list',[CvController::class,'list'])->name('get.cv.list');

/* ------------------------------------ Account ------------------------------------ */
Route::get('/account/create',[AccountController::class,'index'])->name('get.account.create');
Route::post('/account/create',[AccountController::class,'store'])->name('post.account.create');

Route::get('/account/update/{id}',[AccountController::class,'editForm'])->name('get.account.editForm');
Route::post('/account/update/{id}',[AccountController::class,'update'])->name('post.account.update');

Route::get('/account/delete/{id}',[AccountController::class,'delete'])->name('get.account.delete');
Route::get('/account/list',[AccountController::class,'list'])->name('get.account.list');


/* -------------------------------------- Department ----------------------------------- */
Route::get('/department/create',[DepartmentController::class,'index'])->name('get.department.create');
Route::post('/department/create',[DepartmentController::class,'store'])->name('post.department.create');

Route::get('/department/update/{id}',[DepartmentController::class,'editForm'])->name('get.department.editForm');
Route::post('/department/update/{id}',[DepartmentController::class,'update'])->name('post.department.update');

Route::get('/department/delete/{id}',[DepartmentController::class,'delete'])->name('get.department.delete');

Route::get('/department/list',[DepartmentController::class,'list'])->name('get.department.list');
Auth::routes();
