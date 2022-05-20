<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class vaitro extends Model
{
    use Sortable;
    protected $table = 'vaitros';
    protected $fillable = [
        'ten'
    ];
    
    public function quan_tri_vien()
    {
        return $this->belongsTo(quan_ly::class, 'id', 'vai_tro_id')->whereId(1);
    }

    public function nhan_vien()
    {
        return $this->belongsTo(quan_ly::class, 'id', 'vai_tro_id')->whereNotIn('id', [1]);
    }

    public function khach_hang()
    {
        return $this->belongsTo(khach_hang::class, 'id', 'vai_tro_id');
    }

    public function demKhSortable($query, $direction) {
        return $query->withCount('khach_hang')
                     ->orderBy('khach_hang_count', $direction);
    }
/* 
    public function demQtvSortable($query, $direction) {
        return $query->withCount('quan_tri_vien')
                     ->orderBy('quan_tri_vien_count', $direction);
    }

    public function demNvSortable($query, $direction) {
        return $query->withCount('nhan_vien')
                     ->orderByRaw('nhan_vien_count', $direction);
    } */
}
