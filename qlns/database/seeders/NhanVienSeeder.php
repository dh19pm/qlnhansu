<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'fullname' => 'Đặng Tiến Sĩ',
            'email' => 'admin@email.com',
            'role' => 2,
        ]);

        User::factory()->create([
            'fullname' => 'Mai Tấn Lộc',
            'email' => 'quanly@email.com',
            'role' => 1,
        ]);

        User::factory()->create([
            'fullname' => 'Lê Quang Vinh',
            'email' => 'nhanvien@email.com',
            'role' => 0,
        ]);
    }
}
