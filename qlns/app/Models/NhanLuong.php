<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ChamCong;
use App\Models\NghiViec;
use App\Models\HeSo;

class NhanLuong extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nhanluong';

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? 'id', $value)->withTrashed()->firstOrFail();
    }

    public function getNgayCong($nhanvien_id, $month, $year)
    {
        return (new ChamCong())
        ->where('nhanvien_id', $nhanvien_id)
        ->whereYear('created_at', $year)
        ->whereMonth('created_at', $month)
        ->count();
    }

    public function countDate($start, $end)
    {
        return $this->getDay($end) - $this->getDay($start) + 1;
    }

    public function getDay($string)
    {
        return intval(date('d', strtotime($string)));
    }

    public function getMonth($string)
    {
        return intval(date('m', strtotime($string)));
    }

    public function getLastDay($string)
    {
        return intval(date('Y-m-t', strtotime($string)));
    }

    public function getNgayNghi($nhanvien_id, $month, $year, $huongluong = 1)
    {
        $count = 0;

        $data = (new NghiViec())
        ->where(function($query) use ($nhanvien_id, $month, $year, $huongluong) {
            return $query
            ->where('nhanvien_id', $nhanvien_id)
            ->where('huongluong', $huongluong)
            ->whereYear('ngaybd', $year)
            ->whereMonth('ngaybd', $month);
        })->OrWhere(function($query) use ($nhanvien_id, $month, $year, $huongluong) {
            return $query
            ->where('nhanvien_id', $nhanvien_id)
            ->where('huongluong', $huongluong)
            ->whereYear('ngaykt', $year)
            ->whereMonth('ngaykt', $month);
        })->OrWhere(function($query) use ($nhanvien_id, $month, $year, $huongluong) {
            return $query
            ->where('nhanvien_id', $nhanvien_id)
            ->where('huongluong', $huongluong)
            ->whereYear('ngaybd', $year)
            ->whereMonth('ngaybd', $month)
            ->whereYear('ngaykt', $year)
            ->whereMonth('ngaykt', $month);
        })->get();

        foreach ($data as $value)
        {
            if ($this->getMonth($value->ngaybd) == $this->getMonth($value->ngaykt))
                $count = $count + $this->countDate($value->ngaybd, $value->ngaykt);
            else if ($this->getMonth($value->ngaykt) !== $month)
                $count = $count + $this->countDate($value->ngaybd, $this->getLastDay($value->ngaybd));
            else if ($this->getMonth($value->ngaybd) !== $month)
                $count = $count + $this->countDate($year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01', $value->ngaykt);
        }

        return $count;
    }

    public function getBac($nhanvien_id)
    {
        return NhanVien::find($nhanvien_id)->first()->bacluong ?? 0;
    }

    public function getPhuCap($nhanvien_id)
    {
        return NhanVien::join('phucap as p', 'nhanvien.phucap_id', '=', 'p.id')->select('p.hsphucap')->first()->hsphucap ?? 0;
    }

    // thuclinh = (luongcb*heso + luongcb*heso*phucap)/ngaycongchuan*ngaycongthucte - ungtien (+-) thuongphat - baohiem
    public function tinhluong($nhanvien_id, $ngaycongchuan, $month, $year)
    {
        $arr = [];
        $heso = heso::first();
        $arr['luongcb'] = $heso['luongcb'];
        $arr['hesoluong'] = $heso['bac' . $this->getBac($nhanvien_id)];
        $arr['ngaycong'] = $this->getNgayCong($nhanvien_id, $month, $year);
        $arr['ngaynghihl'] = $this->getNgayNghi($nhanvien_id, $month, $year, 1);
        $arr['ngaynghikhl'] = $this->getNgayNghi($nhanvien_id, $month, $year, 0);
        $arr['hsphucap'] = $this->getPhuCap($nhanvien_id);
        $arr['mucluong'] = $arr['luongcb'] * $arr['hesoluong'];
        $arr['phucap'] = $arr['mucluong'] * $arr['hsphucap'];
        $arr['ngaycongchuan'] = $ngaycongchuan;
        $arr['thuclinh'] = ($arr['mucluong'] + $arr['phucap']) / $arr['ngaycongchuan'] * ($arr['ngaycong'] + $arr['ngaynghihl']);
        return $arr;
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'nhanvien_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->join('nhanvien as nv', 'nhanluong.nhanvien_id', '=', 'nv.id')
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
