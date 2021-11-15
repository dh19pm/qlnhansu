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

    public function checkDateStartEnd($start, $end)
    {
        return strtotime($start) <= strtotime($end) ? true : false;
    }

    public function checkNgayCong($start, $end)
    {

    }
    // a -> b => c trong a -> b hoặc d trong a -> b
    // hoặc
    // a -> b => c trong a -> b and d trong a -> b
    public function exists($nhanvienId, $start, $end)
    {
        return $this->where('nhanvien_id', $nhanvienId)
            ->where(function($query) use ($start, $end) {
                return $query->where(function($query2) use ($start) {
                    return $query2
                    ->where('ngaybd', '>=', $start)
                    ->where('ngaykt', '<=', $start);
                })->OrWhere(function($query2) use ($end) {
                    return $query2
                    ->where('ngaybd', '>=', $end)
                    ->where('ngaykt', '<=', $end);
                });
            })->OrWhere(function($query) use ($start, $end) {
                return $query
                ->where('ngaybd', '>=', $start)
                ->where('ngaykt', '<=', $start)
                ->where('ngaybd', '>=', $end)
                ->where('ngaykt', '<=', $end);
            })->get()->count() > 0 ? true : false;
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->join('nhanvien as nv', 'nghiviec.nhanvien_id', '=', 'nv.id')
                  ->where('nv.hovaten', 'like', '%'.$search.'%');
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }
}
