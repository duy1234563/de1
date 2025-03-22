<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TraiCaySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('trai_cay')->insert([
                'ten' => $faker->word,
                'mo_ta' => $faker->sentence,
                'gia' => $faker->randomFloat(2, 10000, 50000),
                'danh_muc' => $faker->randomElement(['Hoa quả', 'Thực phẩm hữu cơ', 'Thực phẩm khô', 'Sản phẩm nổi bật']),
                'so_luong' => $faker->numberBetween(10, 100),
                'hinh_anh' => $faker->imageUrl(200, 200, 'food'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
