<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'user-management.',
    'prefix' => 'user-management'
], function(){

    Route::controller(UserManagementController::class)->group(function () {

        Route::get('/users', 'index')->name('users.index');
        Route::get('/create', 'create')->name('users.create');

        Route::post('/store', 'store')->name('users.store');

        Route::get('/{user}/users', 'show')->name('users.show');

        Route::put('/{user}','update')->name('users.update');
        Route::get('{user}/edit', 'edit')->name('users.edit');

        Route::put('/{user}',  'update')->name('users.update');

        Route::delete('/{user}', 'destroy')->name('users.destroy');
    });

    Route::controller(RoleManagementController::class)->group(function () {

        Route::get('/roles', 'index')->name('roles.index');
        Route::get('/roles/create', 'create')->name('roles.create');

        Route::post('/roles/store', 'store')->name('roles.store');

        Route::get('/{role}/roles', 'show')->name('roles.show');

        Route::put('/roles/{role}','update')->name('roles.update');
        Route::get('/roles/{role}/edit', 'edit')->name('roles.edit');

        Route::put('/roles/{role}',  'update')->name('roles.update');

        Route::delete('/roles/{role}', 'destroy')->name('roles.destroy');
    });

    Route::controller(PermissionManagementController::class)->group(function () {

        Route::get('/permissions', 'index')->name('permissions.index');
        Route::get('/permissions/create', 'create')->name('permissions.create');

        Route::post('/permissions/store', 'store')->name('permissions.store');

        Route::get('/{permission}/permissions', 'show')->name('permissions.show');

        Route::put('/permissions/{permission}','update')->name('permissions.update');
        Route::get('/permissions/{permission}/edit', 'edit')->name('permissions.edit');

        Route::put('/permissions/{permission}',  'update')->name('permissions.update');

        Route::delete('/permissions/{permission}', 'destroy')->name('permissions.destroy');
    });

});
