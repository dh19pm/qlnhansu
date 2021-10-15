<?php

namespace App\Http\Controllers;

use App\Models\ChamCong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class ChamCongController extends Controller
{
    public function create(NhanVien $nhanvien)
    {
        return Inertia::render('ChamCong/Create');
    }

    public function store(NhanVien $nhanvien)
    {
        Request::validate([
            'created_at' => ['required', 'date']
        ]);

        Auth::user()->nhanvien->chamcong->create([
            'nhanvien_id' => $nhanvien->id,
            'created_at' => Request::get('created_at')
        ]);
    }
}
