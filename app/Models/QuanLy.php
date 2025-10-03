<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLy extends Model
{
    use HasFactory;
public $table='quan_ly';
public $fillable = ['ten_dang_nhap','mat_khau','ho_ten','email','so_dien_thoai'];

    // Các thuộc tính khác của model...
}
