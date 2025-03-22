<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('t_food')->insert([
                'ten' => $faker->word,
                'mo_ta' => $faker->sentence,
                'gia' => $faker->randomFloat(2, 10, 100),
                'danh_muc' => $faker->randomElement(['Hoa quả', 'Thực phẩm hữu cơ', 'Thực phẩm khô', 'Sản phẩm nổi bật']),
                'so_luong' => $faker->numberBetween(1, 50),
                'hinh_anh' => $faker->imageUrl(200, 200, 'food'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
