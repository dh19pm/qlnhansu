<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class NhanVienController extends Controller
{
    public function index()
    {
        return Inertia::render('NhanVien/Index', [
            'filters' => Request::all('search', 'trashed'),
            'nhanvien' => Auth::user()->nhanvien()
                ->orderBy('hovaten')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($nhanvien) => [
                    'id' => $nhanvien->id,
                    'hovaten' => $nhanvien->hovaten,
                    'gioitinh' => $nhanvien->gioitinh,
                    'email' => $nhanvien->email,
                    'sdt' => $nhanvien->sdt,
                    'trangthai' => $nhanvien->trangthai,
                    'deleted_at' => $nhanvien->deleted_at,
                ]),
        ]);
    }
}
