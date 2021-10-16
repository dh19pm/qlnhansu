<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhauTru extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'khautru';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }

    public function loaibaohiem()
    {
        return $this->belongsTo(LoaiBaoHiem::class, 'loaibaohiem_id', 'id');
    }
}
