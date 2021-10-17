<?php

namespace App\Http\Controllers;

use App\Models\BaoHiem;
use App\Models\LoaiBaoHiem;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class BaoHiemController extends Controller
{
    public function index()
    {
        return Inertia::render('BaoHiem/Index', [
            'filters' => Request::all('search', 'trashed'),
            'baohiem' => (new BaoHiem())
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($baohiem) => [
                    'id' => $baohiem->id,
                    'tencm' => $baohiem->tencm,
                    'deleted_at' => $baohiem->deleted_at,
                ]),
        ]);
    }

    public function create(NhanVien $nhanvien)
    {
        return Inertia::render('BaoHiem/Create', [
            'loaibaohiem' => (new LoaiBaoHiem())
                ->orderBy('tenbh')
                ->get()
                ->map
                ->only('id', 'tenbh'),
            'nhanvien' => [
                'id' => $nhanvien->id,
                'hovaten' => $nhanvien->hovaten
            ]
        ]);
    }

    public function store(NhanVien $nhanvien)
    {
        Request::validate([
            'loaibaohiem' => ['required', Rule::exists('loaibaohiem', 'id')],
            'maso' => ['required', 'max:100'],
            'noicap' => ['required', 'max:100'],
            'ngaycap' => ['required', 'date'],
            'ngayhethan' => ['required', 'date'],
            'mucdong' => ['required', 'between:0,100.00']
        ]);

        (new BaoHiem())->create([
            'nhanvien_id' => $nhanvien->id,
            'loaibaohiem_id' => Request::get('loaibaohiem'),
            'maso' => Request::get('loaibaohiem'),
            'noicap' => Request::get('noicap'),
            'ngaycap' => Request::get('ngaycap'),
            'ngayhethan' => Request::get('ngayhethan'),
            'mucdong' => Request::get('mucdong')
        ]);

        return Redirect::route('baohiem')->with('success', 'Đã tạo thành công.');
    }

    public function edit(BaoHiem $baohiem)
    {
        return Inertia::render('BaoHiem/Edit', [
            'baohiem' => [
                'id' => $baohiem->id,
                'tencm' => $baohiem->tencm,
                'deleted_at' => $baohiem->deleted_at,
            ],
        ]);
    }

    public function update(BaoHiem $baohiem)
    {
        Request::validate([
            'tencm' => ['required', 'max:100', Rule::unique('baohiem')->ignore($baohiem->id)]
        ]);

        $baohiem->update(Request::only('tencm'));

        return Redirect::back()->with('success', 'Đã cập nhật thành công.');
    }

    public function destroy(BaoHiem $baohiem)
    {
        $baohiem->delete();

        return Redirect::back()->with('success', 'Đã xoá thành công.');
    }

    public function restore(BaoHiem $baohiem)
    {
        $baohiem->restore();

        return Redirect::back()->with('success', 'Đã khôi phục thành công.');
    }
}
