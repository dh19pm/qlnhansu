<?php

namespace Database\Seeders;

use App\Models\ChucVu;
use App\Models\PhongBan;
use App\Models\MucLuong;
use Illuminate\Database\Seeder;

class MucLuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $giamdoc = PhongBan::factory()->create([
            'tenpb' => 'Ban Giám Đốc'
        ]);

        $kinhdoanh = PhongBan::factory()->create([
            'tenpb' => 'Phòng Kinh Doanh'
        ]);

        $phantich = PhongBan::factory()->create([
            'tenpb' => 'Phòng Phân Tích'
        ]);

        $thietke = PhongBan::factory()->create([
            'tenpb' => 'Phòng Thiết Kế'
        ]);

        $laptrinh = PhongBan::factory()->create([
            'tenpb' => 'Phòng Lập Trình'
        ]);

        $hanhchinh = PhongBan::factory()->create([
            'tenpb' => 'Phòng Hành Chính'
        ]);

        $truongphong = ChucVu::factory()->create([
            'tencv' => 'Trưởng Phòng'
        ]);

        $truongphong = ChucVu::factory()->create([
            'tencv' => 'Trưởng Phòng'
        ]);

        $phophong = ChucVu::factory()->create([
            'tencv' => 'Phó Phòng'
        ]);

        $marketing = ChucVu::factory()->create([
            'tencv' => 'Marketing'
        ]);

        $nhanvien = ChucVu::factory()->create([
            'tencv' => 'Nhân Viên'
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $giamdoc,
            'chucvu_id' => $truongphong,
            'luongcb' => 100000000,
            'phucap' => 2.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $giamdoc,
            'chucvu_id' => $phophong,
            'luongcb' => 70000000,
            'phucap' => 2.0
        ]);

         MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 1.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 1.20
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $marketing,
            'luongcb' => 15000000,
            'phucap' => 1.00
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 1.00
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 1.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $phophong,
            'luongcb' => 50000000,
            'phucap' => 1.20
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 1.00
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 1.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 1.20
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 1.00
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 1.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 1.20
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 20000000,
            'phucap' => 1.00
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 10000000,
            'phucap' => 1.50
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $phophong,
            'luongcb' => 7000000,
            'phucap' => 1.20
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 5000000,
            'phucap' => 1.00
        ]);
    }
}
