<?php

namespace App\Http\Controllers;

use App\Models\NghiViec;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        dd((new NghiViec())->checkNgayNghi(63, '2021-11-09'));
        return '';
        return Inertia::render('Dashboard/Index');
    }
}
