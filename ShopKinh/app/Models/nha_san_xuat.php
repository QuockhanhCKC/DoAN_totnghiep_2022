<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class nha_san_xuat extends Model
{
    use SoftDeletes,Sortable;

    protected $table = 'nha_san_xuat';
    protected $primaryKey='id';
    protected $fillable = ['ten'];
    
    public function chitietsanpham() {
        return $this->belongsTo('App\ChiTietSanPham','nha_sx_id','id');
    }
}
