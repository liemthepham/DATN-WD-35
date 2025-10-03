<?php


namespace Database\Factories;

use App\Models\SinhVien;
use Illuminate\Database\Eloquent\Factories\Factory;

class SinhVienFactory extends Factory
{
    protected $model = SinhVien::class;

    public function definition()
    {
        return [
            'ma_sinh_vien' => $this->faker->unique()->numerify('SV####'),
            'ho_ten' => $this->faker->name,
            'ngay_sinh' => $this->faker->date,
            'gioi_tinh' => $this->faker->randomElement(['Nam', 'Nữ']),
            'que_quan' => $this->faker->city,
            'noi_o_hien_tai' => $this->faker->address,
            'lop' => $this->faker->word,
            'nganh' => $this->faker->word,
            'khoa_hoc' => $this->faker->word,
            'so_dien_thoai' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'phong_id' => $this->faker->numberBetween(1, 10),  // Giả sử bạn có 10 phòng
            'trang_thai_ho_so' => $this->faker->randomElement(['Đã duyệt', 'Chờ duyệt', 'Đã xóa']),
        ];
    }
}

