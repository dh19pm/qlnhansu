<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use App\Models\MucLuong;
use App\Models\PhongBan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class MucLuongController extends Controller
{
    public function index()
    {
        return Inertia::render('MucLuong/Index', [
            'filters' => Request::all('search', 'trashed'),
            'mucluong' => (new MucLuong())
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($mucluong) => [
                    'id' => $mucluong->id,
                    'tenpb' => $mucluong->phongban->tenpb,
                    'tencv' => $mucluong->chucvu->tencv,
                    'luongcb' => number_format($mucluong->luongcb) . ' VNĐ',
                    'phucap' => $mucluong->phucap,
                    'deleted_at' => $mucluong->deleted_at,
                ]),
        ]);
    }

    public function create()
    {
        return Inertia::render('MucLuong/Create', [
            'phongban' => (new PhongBan())
                ->orderBy('tenpb')
                ->get()
                ->map
                ->only('id', 'tenpb'),
            'chucvu' => (new ChucVu())
                ->orderBy('tencv')
                ->get()
                ->map
                ->only('id', 'tencv')
        ]);
    }

    public function store()
    {
        Request::validate([
            'phongban' => ['required', Rule::exists('phongban', 'id')],
            'chucvu' => ['required', Rule::exists('chucvu', 'id')],
            'luongcb' => ['required', 'integer'],
            'phucap' => ['required', 'between:0,100.00'],
        ]);

        (new MucLuong())->create([
            'phongban_id' => Request::get('phongban'),
            'chucvu_id' => Request::get('chucvu'),
            'luongcb' => Request::get('luongcb'),
            'phucap' => Request::get('phucap'),
        ]);

        return Redirect::route('mucluong')->with('success', 'Đã tạo thành công.');
    }

    public function edit(MucLuong $mucluong)
    {
        return Inertia::render('MucLuong/Edit', [
            'phongban' => (new PhongBan())
                ->orderBy('tenpb')
                ->get()
                ->map
                ->only('id', 'tenpb'),
            'chucvu' => (new ChucVu())
                ->orderBy('tencv')
                ->get()
                ->map
                ->only('id', 'tencv'),
            'mucluong' => [
                'id' => $mucluong->id,
                'phongban' => $mucluong->phongban_id,
                'chucvu' => $mucluong->chucvu_id,
                'luongcb' => $mucluong->luongcb,
                'phucap' => $mucluong->phucap,
                'deleted_at' => $mucluong->deleted_at,
            ],
        ]);
    }

    public function update(MucLuong $mucluong)
    {
        Request::validate([
            'phongban' => ['required', Rule::exists('phongban', 'id')],
            'chucvu' => ['required', Rule::exists('chucvu', 'id')],
            'luongcb' => ['required', 'integer'],
            'phucap' => ['required', 'between:0,100.00'],
        ]);

        $mucluong->update([
            'phongban_id' => Request::get('phongban'),
            'chucvu_id' => Request::get('chucvu'),
            'luongcb' => Request::get('luongcb'),
            'phucap' => Request::get('phucap'),
        ]);

        return Redirect::back()->with('success', 'Đã cập nhật thành công.');
    }

    public function destroy(MucLuong $mucluong)
    {
        $mucluong->delete();

        return Redirect::back()->with('success', 'Đã xoá thành công.');
    }

    public function restore(MucLuong $mucluong)
    {
        $mucluong->restore();

        return Redirect::back()->with('success', 'Đã khôi phục thành công.');
    }
}
