<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InventoryStatus extends Model
{
    use
    HasFactory,
    SoftDeletes;

    const TELAH_DIMASUKKAN = 1;
    const TELAH_DIKELUARKAN = 2;
    const TIDAK_DIKESAN = 3;

    protected $fillable = [
        'description'
    ];
}
