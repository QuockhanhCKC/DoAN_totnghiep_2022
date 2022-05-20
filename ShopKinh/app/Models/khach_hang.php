<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    protected $table = 'khach_hang';
    protected $fillable = [
        'email',
        'password',
        'vai_tro_id',
        'google_id',
        'ten',
        'sdt',
        'dia_chi',
        'gioi_tinh',
        'hinh_dai_dien',
        'bi_khoa'
    ];
}
