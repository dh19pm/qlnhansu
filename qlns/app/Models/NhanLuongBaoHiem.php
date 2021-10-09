<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhanLuongBaoHiem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nhanluong_baohiem';

    public function nhanluong()
    {
        return $this->belongsTo(NhanLuong::class);
    }

    public function baohiem()
    {
        return $this->belongsTo(BaoHiem::class);
    }
}
