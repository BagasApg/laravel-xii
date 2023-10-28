<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use App\Models\Siswa;

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

// auth

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

    
    
    
    Route::resource('/projects', ProjectsController::class, ['except' => 'create']);
    
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/siswa/tambah', [SiswaController::class, 'create'])->name('siswa_tambah_create');
    Route::post('/siswa/tambah', [SiswaController::class, 'store'])->name('siswa_tambah_store');
    
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'show'])->name('siswa_edit');
    Route::put('/siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa_update');
    
    Route::get('/projects/{id}/create', [ProjectsController::class, 'create'])->name('projects.add');
    
    Route::get('/contact/tambah', [ContactController::class, 'index_tambah'])->name('contact_tambah');
    Route::get('/contact/edit', [ContactController::class, 'index_edit'])->name('contact_edit');

    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa_delete');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login-index');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login-auth');
});
