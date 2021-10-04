<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class NhanVienController extends Controller
{
    public function index()
    {
        return Inertia::render('NhanVien/Index');
    }
}
