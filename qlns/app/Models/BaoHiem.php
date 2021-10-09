<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaoHiem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'baohiem';

    public function loaibaohiem()
    {
        return $this->belongsTo(LoaiBaoHiem::class);
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }

    public function nhanluong_baohiem()
    {
        return $this->hasMany(NhanLuongBaoHiem::class);
    }
}
