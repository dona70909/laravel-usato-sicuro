<?php

use App\Car;
use App\Model\Colour;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;



class CarsColoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // ? Prendo tutti gli id disponibili in colours
        $colours_ids = Colour::pluck('id')->toArray();

        // § Prendo tutti le cars
        $cars = Car::all();

        foreach ($cars as $car) {
            $car->colours()->sync($faker->randomElements($colours_ids, rand(1,3)));
        }



    
    }
}
