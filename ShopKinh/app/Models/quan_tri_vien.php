<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class quan_tri_vien extends Authenticatable
{
    use SoftDeletes, Sortable;

    protected $table = 'quan_tri_vien';
    protected $fillable = [
        'ten_tai_khoan',
        'mat_khau',
        'ten',
        'email',
        'sdt',
        'vai_tro_id',
        'bi_khoa'
    ];
    protected $hidden = ['mat_khau'];

    public function getPasswordAttribute()
    {
        return $this->mat_khau; 
    }

    public function vai_tro()
    {
        return $this->hasOne(vai_tro::class, 'id', 'vai_tro_id');
    }

    public function biKhoaSortable($query, $direction) {
        return $query->orderByRaw("if (bi_khoa = 1, 'Bị khóa', 'Không khóa') {$direction}");
    }
}
