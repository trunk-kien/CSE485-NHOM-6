<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Lab;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'Cán bộ Quản lý',
            'email' => 'admin@thuyloi.edu.vn',
            'password' => Hash::make('12345678'), // Mật khẩu là 12345678
            'role' => 'manager',
        ]);

        $lab1 = Lab::create([
            'name' => 'Phòng Máy C1',
            'location' => 'Tầng 3 Tòa C',
        ]);

        $lab2 = Lab::create([
            'name' => 'Phòng Thực hành Mạng',
            'location' => 'Tầng 4 Tòa C',
        ]);

        Equipment::create([
            'lab_id' => $lab1->id,
            'name' => 'Máy tính Dell Optiplex',
            'total_qty' => 40,
            'available_qty' => 40,
        ]);
        Equipment::create([
            'lab_id' => $lab1->id,
            'name' => 'Switch Cisco 2960',
            'total_qty' => 2,
            'available_qty' => 2,
        ]);
    }
}
