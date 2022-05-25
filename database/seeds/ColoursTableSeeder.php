<?php

use App\Model\Colour;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ColoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 

            $newColour = new Colour();

            $newColour->name = $faker->unique()->colorName();
            $newColour->color = $faker->unique()->hexColor();

            $newColour->save();
        }
    }
}
