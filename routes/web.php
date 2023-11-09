<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });

    Route::view('/pengurusan-prapelan', 'pages.pengurusan-prapelan.index')->name('pengurusan-prapelan.index');
    Route::view('/insiden', 'pages.insiden.index')->name('insiden.index');
    Route::view('/lori-bomba', 'pages.lori-bomba.index')->name('lori-bomba.index');

    Route::view('/pengurusan-anggota', 'pages.pengurusan-anggota.index')->name('pengurusan-anggota.index');
    Route::view('/laporan', 'pages.laporan.index')->name('laporan.index');
    Route::view('/log-masa', 'pages.log-masa.index')->name('log-masa.index');
    Route::view('/balai-bomba', 'pages.balai-bomba.index')->name('balai-bomba.index');
    

});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
