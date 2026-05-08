<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuperAdmin;
use App\Models\Admin;
use App\Models\Tendik;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        SuperAdmin::updateOrCreate(
            ['email' => 'superadmin@aisyah.com'],
            [
                'nama' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );

        Admin::updateOrCreate(
            ['email' => 'adminsma@aisyah.com'],
            [
                'nama' => 'Admin SMA',
                'password' => Hash::make('password'),
                'jenjang' => 'SMA',
            ]
        );

        Tendik::updateOrCreate(
            ['email' => 'ahmad@aisyah.com'],
            [
                'nama' => 'Ustadz Ahmad',
                'password' => Hash::make('password'),
                'jenjang' => 'SMA',
            ]
        );
    }
}
