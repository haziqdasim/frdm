<?php

namespace App\Observers;

use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class InventoryObserver
{
    /**
     * Handle the Inventory "created" event.
     */
    public function created(Inventory $inventory): void
    {
        Log::channel('INVENTORY_LOGS')->info(
                'Item created for '. $inventory->name,
                [$inventory]
            );
    }

    /**
     * Handle the Inventory "updated" event.
     */
    public function updated(Inventory $inventory): void
    {
        Log::channel('INVENTORY_LOGS')->info(
            'Item updated for '. $inventory->name,
            [$inventory]
        );
    }

    /**
     * Handle the Inventory "deleted" event.
     */
    public function deleted(Inventory $inventory): void
    {
        Log::channel('INVENTORY_LOGS')->info(
            'Item '.$inventory->name.' has been deleted.',
            [$inventory]
        );
    }

    /**
     * Handle the Inventory "restored" event.
     */
    public function restored(Inventory $inventory): void
    {
        //
    }

    /**
     * Handle the Inventory "force deleted" event.
     */
    public function forceDeleted(Inventory $inventory): void
    {
        Log::channel('INVENTORY_LOGS')->info(
            'Item '.$inventory->name.' has been removed.',
            [$inventory]
        );
    }
}
