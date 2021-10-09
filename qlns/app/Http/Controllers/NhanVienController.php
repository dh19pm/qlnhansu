<?php

namespace App\Http\Controllers;

use App\Models\BangCap;
use App\Models\ChuyenMon;
use App\Models\NhanVien;
use App\Models\MucLuong;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class NhanVienController extends Controller
{
    public function index()
    {
        return Inertia::render('NhanVien/Index', [
            'filters' => Request::all('search', 'trashed'),
            'nhanvien' => Auth::user()->nhanvien
                ->orderBy('hovaten')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($nhanvien) => [
                    'id' => $nhanvien->id,
                    'hovaten' => $nhanvien->hovaten,
                    'email' => $nhanvien->email,
                    'sdt' => $nhanvien->sdt,
                    'gioitinh' => $nhanvien->gioitinh,
                    'trangthai' => $nhanvien->trangthai,
                    'photo' => $nhanvien->photo_path ? URL::route('image', ['path' => $nhanvien->photo_path, 'w' => 40, 'h' => 40, 'fit' => 'crop']) : null,
                    'deleted_at' => $nhanvien->deleted_at,
                ]),
        ]);
    }
    public function create()
    {
        return Inertia::render('NhanVien/Create', [
            'mucluong' => (new MucLuong())->getAll(),
            'bangcap' => (new BangCap())
                ->orderBy('tenbc')
                ->get()
                ->map
                ->only('id', 'tenbc'),
            'chuyenmon' => (new ChuyenMon())
                ->orderBy('tencm')
                ->get()
                ->map
                ->only('id', 'tencm')
        ]);
    }

    public function store()
    {
        Request::validate([
            'mucluong' => ['required', Rule::exists('mucluong', 'id')],
            'bangcap' => ['required', Rule::exists('bangcap', 'id')],
            'chuyenmon' => ['required', Rule::exists('chuyenmon', 'id')],
            'hovaten' => ['required', 'max:100'],
            'gioitinh' => ['required', 'boolean'],
            'ngaysinh' => ['required', 'date'],
            'email' => ['required', 'max:100', 'email', Rule::unique('nhanvien', 'email')],
            'sdt' => ['required', 'max:15'],
            'cmnd' => ['required', 'max:50'],
            'diachi' => ['nullable', 'max:255'],
            'dantoc' => ['nullable', 'max:15'],
            'tongiao' => ['nullable', 'max:15'],
            'quequan' => ['nullable', 'max:255'],
            'trangthai' => ['required', 'boolean'],
            'dongbhxh' => ['required', 'integer'],
            'photo' => ['nullable', 'image']
        ]);

        (new NhanVien())->create([
            'mucluong_id' => Request::get('mucluong'),
            'bangcap_id' => Request::get('bangcap'),
            'chuyenmon_id' => Request::get('chuyenmon'),
            'hovaten' => Request::get('hovaten'),
            'gioitinh' => Request::get('gioitinh'),
            'ngaysinh' => Request::get('ngaysinh'),
            'email' => Request::get('email'),
            'sdt' => Request::get('sdt'),
            'cmnd' => Request::get('cmnd'),
            'diachi' => Request::get('diachi'),
            'dantoc' => Request::get('dantoc'),
            'tongiao' => Request::get('tongiao'),
            'quequan' => Request::get('quequan'),
            'trangthai' => Request::get('trangthai'),
            'dongbhxh' => Request::get('dongbhxh'),
            'photo_path' => Request::file('photo') ? Request::file('photo')->store('nhanvien') : null,
        ]);

        return Redirect::route('nhanvien')->with('success', 'Đã tạo nhân viên.');
    }

    public function edit(NhanVien $nhanVien)
    {
        return '';
    }

    public function update(NhanVien $nhanVien)
    {
        return '';
    }

    public function destroy(NhanVien $nhanVien)
    {
        return '';
    }

    public function restore(NhanVien $nhanVien)
    {
        return '';
    }
}
