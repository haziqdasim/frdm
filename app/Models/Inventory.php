<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected function photoPath(): Attribute
    {
        return Attribute::make(
            get: fn(string|null $value) => is_null($value) ? null : (storage_path('app\\public\\inventories\\').$value)
        );
    }

    public function latest_log()
    {
        return $this->hasMany(InventoryLog::class, 'inventory_id', 'id')->orderBy('created_at', 'desc')->limit(1);
    }

    public function logs()
    {
        return $this->hasMany(InventoryLog::class, 'inventory_id', 'id')->orderBy('created_at', 'desc');
    }
}
