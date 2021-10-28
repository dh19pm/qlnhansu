<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use App\Models\ChamCong;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class BangChamCongController extends Controller
{
    public function index()
    {
        if (!empty(Request::get('ngaycong')) && preg_match('/([0-9]{4,4}+)\-([0-9]{2,2}+)\-([0-9]{2,2}+)/', Request::get('ngaycong')))
            $ngaycong = Request::get('ngaycong');
        else
            $ngaycong = date('Y-m-d', time());

        return Inertia::render('BangChamCong/Index', [
            'ngaycong' => $ngaycong,
            'chamconglist' => Auth::user()->nhanvien->ngayCongList($ngaycong),
            'filters' => Request::all('search'),
            'nhanvien' => Auth::user()->nhanvien
                ->latest('nhanvien.created_at')
                ->filter(Request::only('search'))
                ->paginate(1000)
                ->withQueryString()
                ->through(fn ($nhanvien) => [
                    'id' => $nhanvien->id,
                    'manv' => 'NV' . str_pad($nhanvien->id, 3, '0', STR_PAD_LEFT),
                    'hovaten' => $nhanvien->hovaten,
                    'email' => $nhanvien->user->email,
                ]),
        ]);
    }

    public function store()
    {
        return '';
    }
}
