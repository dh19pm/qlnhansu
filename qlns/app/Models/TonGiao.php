<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TonGiao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tongiao';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function nhanvien()
    {
        return $this->hasMany(NhanVien::class, 'id', 'nhanvien_id');
    }
}
