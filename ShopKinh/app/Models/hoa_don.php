<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class hoa_don extends Model
{
    use Sortable;
    protected $table = "hoa_don";
    protected $fillable = [
        'ma_hd',
        'khach_hang_id',
        'tong_tien',
        'ngay_dat',
        'dia_chi_nhan',
        'hinh_thuc_thanh_toan',
        'ghi_chu',
        'tinh_trang'
    ];
}
