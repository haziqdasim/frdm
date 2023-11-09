<?php

namespace Database\Seeders;

use App\Models\InventoryStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryStatusSeeder extends Seeder
{

    const STATUS = [
        'TELAH DIMASUKKAN',
        'TELAH DIKELUARKAN',
        'TIDAK DIKESAN'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        array_map(function($status)
        {
            InventoryStatus::create([
                'description' => $status
            ]);
        }, self::STATUS);
    }
}
