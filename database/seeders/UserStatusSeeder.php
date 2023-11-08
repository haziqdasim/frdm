<?php

namespace Database\Seeders;

use App\Models\UserStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{

    const STATUSES = [
        'Active',
        'Suspended',
        'Pending Approval',
        'Inactive'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        array_map(function($status){
            return UserStatus::create(['description'=>$status]);
        }, $this::STATUSES);
    }
}
