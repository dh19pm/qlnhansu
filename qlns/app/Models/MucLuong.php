<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class MucLuong extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mucluong';

    public function getAll()
    {
        return DB::table('mucluong')
            ->join('phongban', 'mucluong.phongban_id', '=', 'phongban.id')
            ->join('chucvu', 'mucluong.chucvu_id', '=', 'chucvu.id')
            ->select('mucluong.id', 'phongban.tenpb', 'chucvu.tencv')
            ->orderBy('phongban.id')
            ->get();
    }
}
