<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhongBan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'phongban';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function mucluong()
    {
        return $this->hasMany(MucLuong::class);
    }
}
