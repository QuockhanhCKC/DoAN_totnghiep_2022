<?php

namespace Database\Seeders;

use App\Models\quan_tri_vien;
use Illuminate\Database\Seeder;
use App\Models\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class QuanTriVienCapCaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        quan_tri_vien::truncate();
        Schema::enableForeignKeyConstraints();

        quan_tri_vien::firstOrCreate(
            ['ten_tai_khoan' => 'super_admin'],
            [
                'mat_khau'      => Hash::make('admin@123'),
                'vai_tro_id'    => 1,
                'ten'           => 'Quản trị viên'
            ]
        );
    }
}
