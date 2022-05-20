<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class chi_tiet_hoa_don extends Model
{
    use Sortable;
    protected $table = "chi_tiet_hoa_don";
}
