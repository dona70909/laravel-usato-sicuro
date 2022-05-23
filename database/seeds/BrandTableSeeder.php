<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Model\Brand;


class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) { 
            $brand = new Brand();
            
            $brand->brand_name =  $faker->randomElement(['renault','citroen','ford','maserati','hummer']);

            $brand->save();
        }
    }
}
