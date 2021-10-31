<?php

namespace App\Http\Controllers;

use App\Models\NhanLuong;
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
        print_r((new NhanLuong())->tinhluong(1, 10, 2021));
        return '';
    }
}
