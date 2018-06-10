<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 10; $i++) {
            App\Category::create([
                'alias' => 'cat_'.$i,
                'title' => 'Category '.$i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            for($j = 0; $j < 10; $j++) {
                App\Product::create([
                    'title' => $faker->sentence(3,true),
                    'description' => $faker->text(250),
                    'category_id' => $i,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }

    }

}
