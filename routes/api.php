<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DpoStatusController;

// Gunakan middleware yang sesuai
Route::prefix('admin')->group(function () {
    Route::get('check-dpo', [DpoStatusController::class, 'showCheckDpoPage']); // Halaman cek DPO (opsional)
    Route::post('check-dpo', [DpoStatusController::class, 'checkDpo']); // Endpoint API untuk cek DPO
});

