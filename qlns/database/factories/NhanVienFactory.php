<?php

namespace Database\Factories;

use App\Models\NhanVien;
use Illuminate\Database\Eloquent\Factories\Factory;

class NhanVienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NhanVien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tongiao = ['Phật giáo', 'Công giáo', 'Tin Lành', 'Hồi giáo', 'Cao Đài', 'Hoà Hảo'];
        $dantoc = ['Kinh', 'Tày', 'Thái', 'Hoa'];
        return [
            'hovaten' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'sdt' => $this->faker->tollFreePhoneNumber,
            'diachi' => $this->faker->streetAddress,
            'quequan' => $this->faker->city,
            'ngaysinh' => $this->faker->dateTimeBetween('1985-01-01', '1995-12-31'),
            'tongiao' => $tongiao[rand(1, count($tongiao)) - 1],
            'dantoc' => $dantoc[rand(1, count($dantoc)) - 1],
            'cmnd' => rand(100000000,999999999)
        ];
    }
}
