<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryLog extends Model
{
    use
    HasFactory,
    SoftDeletes;

    protected $fillable = [
        'inventory_id',
        'status_id'
    ];

    public function status(){
        return $this->hasOne(InventoryStatus::class, 'id', 'status_id');
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class, 'id', 'inventory_id');
    }
}
