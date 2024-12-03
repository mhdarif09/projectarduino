<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\DpoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/superadmin/dashboard', function () {
        return view('superadmin.dashboard'); // View dashboard
    })->name('superadmin.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // View dashboard
    })->name('admin.dashboard');
});

Route::prefix('superadmin')->middleware('role:super_admin')->group(function () {
    // Route untuk halaman utama DPO
    Route::get('/dpo', [DpoController::class, 'index'])->name('superadmin.dpo.index');
    
    // Route untuk form tambah DPO
    Route::get('/dpo/create', [DpoController::class, 'create'])->name('superadmin.dpo.create');
    
    // Route untuk menyimpan DPO
    Route::post('/dpo', [DpoController::class, 'store'])->name('superadmin.dpo.store');
    
    // Route untuk form edit DPO
    Route::get('/dpo/{nik}/edit', [DpoController::class, 'edit'])->name('superadmin.dpo.edit');
    
    // Route untuk update DPO
    Route::put('/dpo/{nik}', [DpoController::class, 'update'])->name('superadmin.dpo.update');
    
    // Route untuk menghapus DPO
    Route::delete('/dpo/{nik}', [DpoController::class, 'destroy'])->name('superadmin.dpo.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/check-dpo', function () {
        return view('admin.check_dpo');
    })->name('admin.checkDpoPage');
});