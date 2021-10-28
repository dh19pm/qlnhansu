<?php

namespace App\Http\Controllers;

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
        return Inertia::render('BangChamCong/Index', [
            'filters' => Request::all('search', 'trashed'),
            'nhanvien' => Auth::user()->nhanvien
                ->latest('nhanvien.created_at')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(50)
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
