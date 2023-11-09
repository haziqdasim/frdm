<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InventoryController::class, 'index'])->name('index');
Route::get('/create', [InventoryController::class, 'create'])->name('create');
Route::get('/{inventory}', [InventoryController::class, 'show'])->name('inventory.show');

Route::post('/', [InventoryController::class, 'store'])->name('store');
Route::put('/', [InventoryController::class, 'update'])->name('update');
Route::delete('/{inventory}', [InventoryController::class, 'destroy'])->name('destroy');
