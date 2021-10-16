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

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function phongban()
    {
        return $this->belongsTo(PhongBan::class);
    }

    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class);
    }

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class);
    }

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
