<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/{inventory}', [InventoryController::class, 'getItem'])->name('inventory.get-item');

Route::post('/register-rfid', [InventoryController::class, 'registerRfid'])->name('inventory.register-rfid');

Route::post('/log-items', [InventoryController::class, 'logItems'])->name('inventory.log-items');