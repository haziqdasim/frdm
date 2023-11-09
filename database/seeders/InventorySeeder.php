<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    const ITEMS = [
        'TUKUL',
        'PLAYAR',
        'WRENCH',
        'HOS AIR',
        'SUIT API'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        array_map(function($item){
            Inventory::create([
                'name' => $item
            ]);
        }, self::ITEMS);
    }
}
