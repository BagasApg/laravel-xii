<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [MainController::class, 'dashboard'])->name('dashboard');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/tambah', [SiswaController::class, 'index_tambah'])->name('siswa_tambah');
Route::get('/siswa/edit', [SiswaController::class, 'index_edit'])->name('siswa_edit');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/tambah', [ProjectsController::class, 'index_tambah'])->name('projects_tambah');
Route::get('/projects/edit', [ProjectsController::class, 'index_edit'])->name('projects_edit');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/tambah', [ContactController::class, 'index_tambah'])->name('contact_tambah');
Route::get('/contact/edit', [ContactController::class, 'index_edit'])->name('contact_edit');
