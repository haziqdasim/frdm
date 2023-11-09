<?php

namespace App\Observers;

use App\Models\Inventory;
use App\Models\InventoryLog;
use Illuminate\Support\Facades\Log;

class InventoryLogObserver
{
    /**
     * Handle the Inventory "created" event.
     */
    public function created(InventoryLog $log): void
    {
        Log::channel('INVENTORY_LOGS')->info(
                $log->inventory->name.' '.$log->status->description,
                [$log]
            );
    }

    /**
     * Handle the Inventory "updated" event.
     */
    public function updated(InventoryLog $log): void
    {
        // Log::channel('INVENTORY_LOGS')->info(
        //     $log->inventory->name.' '.$log->status->description,
        //     [$log]
        // );
    }

    /**
     * Handle the Inventory "deleted" event.
     */
    public function deleted(InventoryLog $log): void
    {
        // Log::channel('INVENTORY_LOGS')->info(
        //     'Item '.$inventory->name.' has been deleted.',
        //     [$inventory]
        // );
    }

    /**
     * Handle the Inventory "restored" event.
     */
    public function restored(InventoryLog $log): void
    {
        //
    }

    /**
     * Handle the Inventory "force deleted" event.
     */
    public function forceDeleted(Inventory $inventory): void
    {
        // Log::channel('INVENTORY_LOGS')->info(
        //     'Item '.$inventory->name.' has been removed.',
        //     [$inventory]
        // );
    }
}
