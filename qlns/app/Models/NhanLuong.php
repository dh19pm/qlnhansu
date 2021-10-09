<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanLuong extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nhanluong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }

    public function nhanluong_baohiem()
    {
        return $this->hasMany(NhanLuongBaoHiem::class);
    }
}
