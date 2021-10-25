<?php

namespace App\Http\Controllers;

use App\Models\HopDong;
use App\Models\NhanVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class HeSoController extends Controller
{
    public function index()
    {
        return Inertia::render('HopDong/Index', [
            'filters' => Request::all('search', 'trashed'),
            'hopdong' => (new HopDong())
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($hopdong) => [
                    'id' => $hopdong->id,
                    'mahd' => 'HD' . str_pad($hopdong->id, 10, '0', STR_PAD_LEFT),
                    'hovaten' => $hopdong->nhanvien->hovaten,
                    'ngaybd' => $hopdong->ngaybd,
                    'ngaykt' => $hopdong->ngaykt ?? 'Vô thời hạn',
                    'loaihopdong' => $hopdong->loaihopdong,
                    'deleted_at' => $hopdong->deleted_at,
                ]),
        ]);
    }
}
