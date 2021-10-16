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
        return $this->belongsTo(PhongBan::class, 'phongban_id', 'id')->withTrashed();
    }

    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class, 'chucvu_id', 'id')->withTrashed();
    }

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class, 'id', 'nhanvien_id');
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

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->join('phongban as pb', 'mucluong.phongban_id', '=', 'pb.id')
            ->join('chucvu as cv', 'mucluong.chucvu_id', '=', 'cv.id')
            ->Where('pb.tenpb', 'like', '%'.$search.'%')
            ->OrWhere('cv.tencv', 'like', '%'.$search.'%')
            ->select('mucluong.*', 'pb.tenpb', 'cv.tencv');
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }
}
