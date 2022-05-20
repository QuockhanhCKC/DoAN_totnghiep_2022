<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class loai_san_pham extends Model
{
    use SoftDeletes;

    protected $table = 'loai_san_pham';
    protected $fillable = ['ten'];

}
