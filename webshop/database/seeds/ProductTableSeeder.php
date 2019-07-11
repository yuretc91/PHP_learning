<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i =0; $i < 50; $i++){
            DB::table('products')->insert([
                'name' => $faker->name,
                'url' => $faker->slug,
                'image' => $faker->word,
                'content' => $faker->text,
                'price' => $faker->randomDigit,
                'cathegory_id' => $faker->randomDigit,
                'stock' => $faker->randomDigit,
                'active' => $faker->randomDigit
            ]);
        }
    }
}
