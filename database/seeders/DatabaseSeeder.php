<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BaoCao;
use App\Models\ChuyenPhong;
use App\Models\DangKyKTX;
use App\Models\HoaDon;
use App\Models\Phong;
use App\Models\QuanLy;
use App\Models\SinhVien;
use App\Models\SuCo;
use App\Models\TaiSan;
use App\Models\ThongBao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
             $this->call([
            Phong::class,
            SinhVien::class,
            BaoCao::class,
            ThongBaoSeeder::class,
            ChuyenPhong::class,
            DangKyKTX::class,
            HoaDon::class,
            QuanLy::class,
            SuCo::class,
            TaiSan::class,

       ]);
        }
       
        
}
}
