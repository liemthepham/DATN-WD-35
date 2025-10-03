<?php

namespace Database\Factories;

use App\Models\QuanLy;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuanLyFactory extends Factory
{
    protected $model = QuanLy::class;

    public function definition()
    {
        return [
            'ten_dang_nhap' => $this->faker->unique()->userName,
            'mat_khau' => bcrypt('password'), // Mật khẩu giả
            'ho_ten' => $this->faker->name,
            'chuc_vu' => $this->faker->jobTitle,
        ];
    }
}
