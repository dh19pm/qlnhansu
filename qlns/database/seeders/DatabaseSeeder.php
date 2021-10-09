<?php

namespace Database\Seeders;

use App\Models\BangCap;
use App\Models\ChucVu;
use App\Models\ChuyenMon;
use App\Models\MucLuong;
use App\Models\NhanVien;
use App\Models\PhongBan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            'phucap' => 3000000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $giamdoc,
            'chucvu_id' => $phophong,
            'luongcb' => 70000000,
            'phucap' => 2000000
        ]);

         MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $marketing,
            'luongcb' => 15000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $phophong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 20000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $phophong,
            'luongcb' => 7000000,
            'phucap' => 500000
        ]);

        MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 5000000,
            'phucap' => 500000
        ]);

        ChuyenMon::factory()->create([
            'tencm' => 'Programmer'
        ]);

        ChuyenMon::factory()->create([
            'tencm' => 'Tester'
        ]);

        ChuyenMon::factory()->create([
            'tencm' => 'Front-end'
        ]);

        ChuyenMon::factory()->create([
            'tencm' => 'Back-end'
        ]);

        ChuyenMon::factory()->create([
            'tencm' => 'Full-Stack'
        ]);

        BangCap::factory()->create([
            'tenbc' => 'Tiến Sĩ'
        ]);

        BangCap::factory()->create([
            'tenbc' => 'Thạc Sĩ'
        ]);

        BangCap::factory()->create([
            'tenbc' => 'Cử Nhân'
        ]);

        BangCap::factory()->create([
            'tenbc' => 'Đại Học'
        ]);

        BangCap::factory()->create([
            'tenbc' => 'Cao Đẳng'
        ]);

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
