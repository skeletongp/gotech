<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CursosController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum','verified'])->get('/',  [HomeController::class, 'index'])->name('home');
Route::middleware(['auth:sanctum','verified'])->get('/home',  [HomeController::class, 'index'])->name('main');
Route::middleware(['auth:sanctum','verified'])->get('/cursos',  [CursosController::class, 'cursos_index'])->name('cursos_index');
Route::middleware(['auth:sanctum','verified'])->get('/miscursos',  [CursosController::class, 'miscursos'])->name('cursos_miscursos');
Route::middleware(['auth:sanctum','verified'])->get('/cursos/{slug?}/{search?}',  [CursosController::class, 'cursos_show'])->name('cursos.show');
Route::middleware(['auth:sanctum','verified'])->post('/cursos.store',  [CursosController::class, 'cursos_store'])->name('cursos_store');
Route::middleware(['auth:sanctum','verified'])->post('/video.search',  [CursosController::class, 'video_search'])->name('video_search');