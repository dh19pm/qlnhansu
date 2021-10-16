<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NghiViec extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nghiviec';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }
}
