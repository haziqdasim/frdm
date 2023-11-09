<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'Senarai',
            'Lihat',
            'Tambah',
            'Kemaskini',
            'Padam',
        ];

        $permissions_by_role = [
            'superadmin' => [
                'pengguna',
                'insiden',
                'prapelan',
                'balai',
                'lori',
                'anggota',
                'inventori',
                'log masa',
                'laporan',
            ],
            'admin' => [
                'insiden',
                'prapelan',
                'lori',
            ],
            'pemandu bomba' => [
                'insiden',
                'prapelan',
                'lori',
            ],
        ];

        foreach ($permissions_by_role['superadmin'] as $permission) {
            foreach ($abilities as $ability) {
                Permission::create(['name' => $ability . ' ' . $permission]);
            }
        }

        foreach ($permissions_by_role as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($abilities as $ability) {
                foreach ($permissions as $permission) {
                    $full_permissions_list[] = $ability . ' ' . $permission;
                }
            }
            Role::create(['name' => $role])->syncPermissions($full_permissions_list);
        }

        User::find(1)->assignRole('superadmin');
        User::find(2)->assignRole('admin');
        User::find(3)->assignRole('pemandu bomba');

    }
}
