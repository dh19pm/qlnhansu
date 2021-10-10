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
            'filters' => Request::all('search', 'trashed', 'gioitinh', 'trangthai'),
            'nhanvien' => Auth::user()->nhanvien
                ->latest('nhanvien.created_at')
                ->filter(Request::only('search', 'trashed', 'gioitinh', 'trangthai'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($nhanvien) => [
                    'id' => $nhanvien->id,
                    'hovaten' => $nhanvien->hovaten,
                    'email' => $nhanvien->user->email,
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
            'mucluong' => Auth::user()->nhanvien->mucluong->getAll(),
            'bangcap' => Auth::user()->nhanvien->bangcap
                ->orderBy('tenbc')
                ->get()
                ->map
                ->only('id', 'tenbc'),
            'chuyenmon' => Auth::user()->nhanvien->chuyenmon
                ->orderBy('tencm')
                ->get()
                ->map
                ->only('id', 'tencm'),
            'ngoaingu' => Auth::user()->nhanvien->ngoaingu
                ->orderBy('tenng')
                ->get()
                ->map
                ->only('id', 'tenng'),
            'dantoc' => Auth::user()->nhanvien->dantoc
                ->orderBy('tendt')
                ->get()
                ->map
                ->only('id', 'tendt'),
            'tongiao' => Auth::user()->nhanvien->tongiao
                ->orderBy('tentg')
                ->get()
                ->map
                ->only('id', 'tentg')
        ]);
    }

    public function store()
    {
        Request::validate([
            'mucluong' => ['required', Rule::exists('mucluong', 'id')],
            'bangcap' => ['required', Rule::exists('bangcap', 'id')],
            'chuyenmon' => ['required', Rule::exists('chuyenmon', 'id')],
            'ngoaingu' => ['required', Rule::exists('ngoaingu', 'id')],
            'dantoc' => ['required', Rule::exists('dantoc', 'id')],
            'tongiao' => ['required', Rule::exists('tongiao', 'id')],
            'hovaten' => ['required', 'max:100'],
            'gioitinh' => ['required', 'boolean'],
            'ngaysinh' => ['required', 'date'],
            'role' => ['required', 'between:0,2'],
            'email' => ['required', 'max:100', 'email', Rule::unique('users', 'email')],
            'password' => ['nullable'],
            'sdt' => ['required', 'max:15'],
            'cmnd' => ['required', 'max:50'],
            'diachi' => ['nullable', 'max:255'],
            'quequan' => ['nullable', 'max:255'],
            'trangthai' => ['required', 'boolean'],
            'hesoluong' => ['required', 'between:0,100.00'],
            'photo' => ['nullable', 'image']
        ]);

        $nhanvien_id = Auth::user()->nhanvien->create([
            'mucluong_id' => Request::get('mucluong'),
            'bangcap_id' => Request::get('bangcap'),
            'chuyenmon_id' => Request::get('chuyenmon'),
            'ngoaingu_id' => Request::get('ngoaingu'),
            'dantoc_id' => Request::get('dantoc'),
            'tongiao_id' => Request::get('tongiao'),
            'hovaten' => Request::get('hovaten'),
            'gioitinh' => Request::get('gioitinh'),
            'ngaysinh' => Request::get('ngaysinh'),
            'sdt' => Request::get('sdt'),
            'cmnd' => Request::get('cmnd'),
            'diachi' => Request::get('diachi'),
            'quequan' => Request::get('quequan'),
            'trangthai' => Request::get('trangthai'),
            'hesoluong' => Request::get('hesoluong'),
            'photo_path' => Request::file('photo') ? Request::file('photo')->store('nhanvien') : null,
        ]);

        Auth::user()->nhanvien->user->create([
            'nhanvien_id' => $nhanvien_id,
            'email' => Request::get('email'),
            'password' => Request::get('password'),
            'role' => Request::get('role')
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
