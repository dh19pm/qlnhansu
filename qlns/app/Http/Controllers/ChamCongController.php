<?php

namespace App\Http\Controllers;

use App\Models\ChamCong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class ChamCongController extends Controller
{
    public function index()
    {
        return Inertia::render('ChamCong/Index', [
            'filters' => Request::all('search', 'trashed', 'nhanvien'),
            'chamcong' => (new ChamCong())
                ->latest('chamcong.created_at')
                ->filter(Request::only('search', 'trashed', 'nhanvien'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($chamcong) => [
                    'id' => $chamcong->id,
                    'hovaten' => $chamcong->nhanvien->hovaten,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chamcong->created_at)),
                    'deleted_at' => $chamcong->deleted_at,
                ]),
        ]);
    }

    public function create(NhanVien $nhanvien)
    {
        return Inertia::render('ChamCong/Create', [
            'nhanvien' => [
                'id' => $nhanvien->id,
                'hovaten' => $nhanvien->hovaten
            ]
        ]);
    }

    public function edit(ChamCong $chamcong)
    {
        return '';
    }

    public function store(NhanVien $nhanvien)
    {
        Request::validate([
            'created_at' => ['required', 'date']
        ]);

        (new ChamCong())->create([
            'nhanvien_id' => $nhanvien->id,
            'created_at' => Request::get('created_at')
        ]);

        return Redirect::back()->with('success', 'Đã chấm công.');
    }
}
