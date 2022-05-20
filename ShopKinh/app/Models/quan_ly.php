<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quan_ly extends Model
{
    protected $table = 'quan_ly';
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
}
