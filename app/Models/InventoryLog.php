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
}
