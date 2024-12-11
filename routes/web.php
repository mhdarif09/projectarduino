<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuperAdmin\DpoController;
use App\Http\Controllers\Admin\DpoStatusController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\SuperAdmin\BlogController;



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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/blog/{id}', [WelcomeController::class, 'showBlog'])->name('blog.show');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/export-dpo', [DashboardController::class, 'export'])->name('admin.exportDpo');
});

Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('super-admin/dashboard', function () {
        return view('superadmin.dashboard'); // Mengarahkan ke view
    })->name('superadmin.dashboard');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/export-dpo', [DashboardController::class, 'export'])->name('admin.exportDpo');
});
    Route::get('/admin/check-dpo', function () {
        return view('admin.check_dpo');
    })->name('admin.checkDpoPage');

Route::prefix('superadmin/dpo')->name('superadmin.dpo.')->middleware('role:super_admin')->group(function() {
    Route::get('/', [DpoController::class, 'index'])->name('index');
    Route::get('create', [DpoController::class, 'create'])->name('create');
    Route::post('store', [DpoController::class, 'store'])->name('store');
    Route::get('edit/{nik}', [DpoController::class, 'edit'])->name('edit');  // Change to {nik}
    Route::put('update/{nik}', [DpoController::class, 'update'])->name('update');  // Change to {nik}
    Route::delete('destroy/{nik}', [DpoController::class, 'destroy'])->name('destroy');  // Change to {nik}
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin/check-dpo', 'admin.check_dpo')->name('admin.checkDpoPage');
    Route::post('/admin/check-dpo', [DpoStatusController::class, 'checkDpo'])->name('admin.checkDpo');
});

// Blogs

Route::prefix('superadmin')->middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('blogs', [BlogController::class, 'index'])->name('superadmin.blog.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('superadmin.blog.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('superadmin.blog.store');
    Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('superadmin.blog.edit');
    Route::put('blogs/{id}', [BlogController::class, 'update'])->name('superadmin.blog.update');
    Route::delete('blogs/{id}', [BlogController::class, 'destroy'])->name('superadmin.blog.destroy');
});