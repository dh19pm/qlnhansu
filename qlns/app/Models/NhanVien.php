<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanVien extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nhanvien';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function chamcong()
    {
        return $this->hasMany(NhanVien::class);
    }

    public function hopdong()
    {
        return $this->hasMany(HopDong::class);
    }

    public function thuongphat()
    {
        return $this->hasMany(ThuongPhat::class);
    }

    public function ungluong()
    {
        return $this->hasMany(UngLuong::class);
    }

    public function nghiviec()
    {
        return $this->hasMany(NghiViec::class);
    }

    public function baohiem()
    {
        return $this->hasMany(BaoHiem::class);
    }

    public function nhanluong()
    {
        return $this->hasMany(NhanLuong::class);
    }

    public function mucluong()
    {
        return $this->belongsTo(MucLuong::class);
    }

    public function ngoaingu()
    {
        return $this->belongsTo(NgoaiNgu::class);
    }

    public function chuyenmon()
    {
        return $this->belongsTo(ChuyenMon::class);
    }

    public function bangcap()
    {
        return $this->belongsTo(BangCap::class);
    }

    public function tongiao()
    {
        return $this->belongsTo(TonGiao::class);
    }

    public function dantoc()
    {
        return $this->belongsTo(DanToc::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('hovaten', 'like', '%'.$search.'%');
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }
}
