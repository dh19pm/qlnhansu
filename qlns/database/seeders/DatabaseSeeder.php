<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\BangCap;
use App\Models\ChucVu;
use App\Models\ChuyenMon;
use App\Models\CongTy;
use App\Models\Contact;
use App\Models\MucLuong;
use App\Models\NhanVien;
use App\Models\Organization;
use App\Models\PhongBan;
use App\Models\User;
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
        User::factory()->create([
            'fullname' => 'Đặng Tiến Sĩ',
            'email' => 'admin@email.com',
            'password' => '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK',
            'owner' => true,
        ]);

        User::factory()->create([
            'fullname' => 'Mai Tấn Lộc',
            'email' => 'user1@email.com',
            'password' => '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK',
            'owner' => false,
        ]);

        User::factory()->create([
            'fullname' => 'Lê Quang Vinh',
            'email' => 'user2@email.com',
            'password' => '$2y$10$lA.ce1x/0raT1YqpuYUR0.BjrEoHMR0TmcB3/nbI7cXw2EqBSk2bK',
            'owner' => false,
        ]);

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

        $giamdoc_truongphong = MucLuong::factory()->create([
            'phongban_id' => $giamdoc,
            'chucvu_id' => $truongphong,
            'luongcb' => 100000000,
            'phucap' => 3000000
        ]);

        $giamdoc_phophong = MucLuong::factory()->create([
            'phongban_id' => $giamdoc,
            'chucvu_id' => $phophong,
            'luongcb' => 70000000,
            'phucap' => 2000000
        ]);

        $kinhdoanh_truongphong = MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        $kinhdoanh_phophong = MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        $kinhdoanh_marketing = MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $marketing,
            'luongcb' => 15000000,
            'phucap' => 500000
        ]);

        $kinhdoanh_nhanvien = MucLuong::factory()->create([
            'phongban_id' => $kinhdoanh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        $phantich_truongphong = MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        $phantich_phophong = MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $phophong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        $phantich_nhanvien = MucLuong::factory()->create([
            'phongban_id' => $phantich,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        $thietke_truongphong = MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        $thietke_phophong = MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        $thietke_nhanvien = MucLuong::factory()->create([
            'phongban_id' => $thietke,
            'chucvu_id' => $nhanvien,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        $laptrinh_truongphong = MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 50000000,
            'phucap' => 500000
        ]);

        $laptrinh_phophong = MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $phophong,
            'luongcb' => 30000000,
            'phucap' => 500000
        ]);

        $laptrinh_nhanvien = MucLuong::factory()->create([
            'phongban_id' => $laptrinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 20000000,
            'phucap' => 500000
        ]);

        $hanhchinh_truongphong = MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $truongphong,
            'luongcb' => 10000000,
            'phucap' => 500000
        ]);

        $hanhchinh_phophong = MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $phophong,
            'luongcb' => 7000000,
            'phucap' => 500000
        ]);

        $hanhchinh_nhanvien = MucLuong::factory()->create([
            'phongban_id' => $hanhchinh,
            'chucvu_id' => $nhanvien,
            'luongcb' => 5000000,
            'phucap' => 500000
        ]);

        $programmer = ChuyenMon::factory()->create([
            'tencm' => 'Programmer'
        ]);

        $tester = ChuyenMon::factory()->create([
            'tencm' => 'Tester'
        ]);

        $frontend = ChuyenMon::factory()->create([
            'tencm' => 'Front-end'
        ]);

        $backend = ChuyenMon::factory()->create([
            'tencm' => 'Back-end'
        ]);

        $fullstack = ChuyenMon::factory()->create([
            'tencm' => 'Full-Stack'
        ]);

        $tiensi = BangCap::factory()->create([
            'tenbc' => 'Tiến Sĩ'
        ]);

        $thacsi = BangCap::factory()->create([
            'tenbc' => 'Thạc Sĩ'
        ]);

        $cunhan = BangCap::factory()->create([
            'tenbc' => 'Cử Nhân'
        ]);

        $daihoc = BangCap::factory()->create([
            'tenbc' => 'Đại Học'
        ]);

        $caodang = BangCap::factory()->create([
            'tenbc' => 'Cao Đẳng'
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $giamdoc_truongphong,
            'bangcap_id' => $tiensi,
            'chuyenmon_id' => $fullstack,
            'hovaten' => 'Nguyễn Giám Đốc',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $giamdoc_phophong,
            'bangcap_id' => $tiensi,
            'chuyenmon_id' => $frontend,
            'hovaten' => 'Nguyễn Minh Tuấn',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $giamdoc_phophong,
            'bangcap_id' => $tiensi,
            'chuyenmon_id' => $frontend,
            'hovaten' => 'Phạm Văn Mách',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $thietke_truongphong,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $frontend,
            'hovaten' => 'Lê Văn Luyện',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $thietke_phophong,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $frontend,
            'hovaten' => 'Nguyễn Thị Phương Thảo',
            'gioitinh' => true,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $thietke_nhanvien,
            'bangcap_id' => $caodang,
            'chuyenmon_id' => $frontend,
            'hovaten' => 'Mai Hồi Kết',
            'gioitinh' => true,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $laptrinh_truongphong,
            'bangcap_id' => $thacsi,
            'chuyenmon_id' => $backend,
            'hovaten' => 'Tô Ngọc Trân',
            'gioitinh' => true,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $laptrinh_phophong,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $backend,
            'hovaten' => 'Nguyễn Thị Kim Trang',
            'gioitinh' => true,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $laptrinh_nhanvien,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $backend,
            'hovaten' => 'Mai Lỗ Tấn',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $kinhdoanh_truongphong,
            'bangcap_id' => $tiensi,
            'chuyenmon_id' => $fullstack,
            'hovaten' => 'Nguyễn Văn Nam',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $kinhdoanh_marketing,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $fullstack,
            'hovaten' => 'Nguyễn Tấn Tài',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);

        NhanVien::factory()->create([
            'mucluong_id' => $kinhdoanh_marketing,
            'bangcap_id' => $daihoc,
            'chuyenmon_id' => $fullstack,
            'hovaten' => 'Nguyễn Tấn Tài',
            'gioitinh' => false,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);


        NhanVien::factory()->create([
            'mucluong_id' => $hanhchinh_truongphong,
            'bangcap_id' => $thacsi,
            'chuyenmon_id' => $fullstack,
            'hovaten' => 'Phạm Thanh Mai',
            'gioitinh' => true,
            'trangthai' => true,
            'dongbhxh' => 8.0
        ]);
    }
}
