<?php

use App\Livewire\Roles\RolesIndex;
use App\Livewire\Profile\ProfileForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Livewire\Permissions\PermissionsIndex;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/akun', [ProfileController::class, 'edit'])->name('akun.edit');
    Route::patch('/akun', [ProfileController::class, 'update'])->name('akun.update');
    Route::delete('/akun', [ProfileController::class, 'destroy'])->name('akun.destroy');

    Route::get('/profile', ProfileForm::class)->name('profile.form');

    Route::get('/permissions', PermissionsIndex::class)->name('permissions.index');

    Route::get('/roles', RolesIndex::class)->name('roles.index');
});

require __DIR__.'/auth.php';
