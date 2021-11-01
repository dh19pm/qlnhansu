<?php

namespace App\Http\Controllers;

use App\Models\NhanLuong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class NhanLuongController extends Controller
{
    public function index()
    {
        return Inertia::render('NhanLuong/Index', [
            'filters' => Request::all('search', 'trashed'),
            'nhanluong' => (new NhanLuong())
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($nhanluong) => [
                    'id' => $nhanluong->id,
                    'manv' => 'NV' . str_pad($nhanluong->nhanvien->id, 3, '0', STR_PAD_LEFT),
                    'hovaten' => $nhanluong->nhanvien->hovaten,
                    'thuclinh' => number_format($nhanluong->thuclinh) . ' VNĐ',
                    'ngaynhan' => str_pad($nhanluong->thang, 2, '0', STR_PAD_LEFT) . '-' . $nhanluong->nam,
                    'deleted_at' => $nhanluong->deleted_at,
                ]),
        ]);
    }

    public function create(NhanVien $nhanvien)
    {
        return Inertia::render('NhanLuong/Create', [
            'nhanvien' => [
                'id' => $nhanvien->id,
                'hovaten' => $nhanvien->hovaten
            ]
        ]);
    }

    public function store(NhanVien $nhanvien)
    {
        Request::validate([
            'heso' => ['required', 'between:0,100.00'],
            'phucap' => ['required', 'between:0,100.00'],
            'khautru' => ['required', 'between:0,100.00'],
            'luongcb' => ['required', 'integer'],
            'mucluong' => ['required', 'integer'],
            'ngaycongchuan' => ['required', 'integer'],
            'ngaycong' => ['required', 'integer'],
            'nghihl' => ['required', 'integer'],
            'nghikhl' => ['required', 'integer'],
            'thuong' => ['required', 'integer'],
            'phat' => ['required', 'integer'],
            'tamung' => ['required', 'integer'],
            'thuclinh' => ['required', 'integer'],
            'ngaynhan' => ['required', 'date'],
        ]);

        (new NhanLuong())->create([
            'nhanvien_id' => $nhanvien->id,
            'heso' => Request::get('heso'),
            'phucap' => Request::get('phucap'),
            'khautru' => Request::get('khautru'),
            'luongcb' => Request::get('luongcb'),
            'mucluong' => Request::get('mucluong'),
            'ngaycongchuan' => Request::get('ngaycongchuan'),
            'ngaycong' => Request::get('ngaycong'),
            'nghihl' => Request::get('nghihl'),
            'nghikhl' => Request::get('nghikhl'),
            'thuong' => Request::get('thuong'),
            'phat' => Request::get('phat'),
            'tamung' => Request::get('tamung'),
            'thuclinh' => Request::get('thuclinh'),
            'thang' => date('m', strtotime(Request::get('ngaynhan'))),
            'nam' => date('Y', strtotime(Request::get('ngaynhan'))),
        ]);

        return Redirect::route('nhanluong')->with('success', 'Đã tạo thành công.');
    }

    public function edit(NhanLuong $nhanluong)
    {
        return Inertia::render('NhanLuong/Edit', [
            'nhanluong' => [
                'id' => $nhanluong->id,
                'hovaten' => $nhanluong->nhanvien->hovaten,
                'lydo' => $nhanluong->lydo,
                'sotien' => $nhanluong->sotien,
                'ngayung' => $nhanluong->nam . '-' . str_pad($nhanluong->thang, 2, '0', STR_PAD_LEFT),
                'deleted_at' => $nhanluong->deleted_at,
            ],
        ]);
    }

    public function update(NhanLuong $nhanluong)
    {
        Request::validate([
            'tencm' => ['required', 'max:100', Rule::unique('nhanluong')->ignore($nhanluong->id)]
        ]);

        $nhanluong->update(Request::only('tencm'));

        return Redirect::back()->with('success', 'Đã cập nhật thành công.');
    }

    public function destroy(NhanLuong $nhanluong)
    {
        $nhanluong->delete();

        return Redirect::back()->with('success', 'Đã xoá thành công.');
    }

    public function restore(NhanLuong $nhanluong)
    {
        $nhanluong->restore();

        return Redirect::back()->with('success', 'Đã khôi phục thành công.');
    }
}
