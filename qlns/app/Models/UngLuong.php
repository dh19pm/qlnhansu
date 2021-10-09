<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UngLuong extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ungluong';

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class);
    }
}
