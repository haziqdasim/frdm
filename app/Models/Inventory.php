<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use
    HasFactory,
    SoftDeletes;

    protected $fillable = [
        'firetruck_id',
        'rfid_no',
        'name',
        'photo_path'
    ];
}
