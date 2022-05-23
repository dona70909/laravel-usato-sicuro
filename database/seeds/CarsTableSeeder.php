<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;


class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i= 0; $i < 10; $i++){
            $car = new Car();
            $car->brand_id = $faker->numberBetween(1,4);
            $car->numero_telaio = $faker->bothify('?????-#####');
            $car->model = $faker->word(20,true); 
            $car->porte = $faker->numberBetween(2, 5);
            $car->data_immatricolazione = $faker->date("Y-m-d");
            $car->alimentazione = $faker->randomElement(['Benzina','Diesel','GPL','Metano','Vino']);
            $car->prezzo = $faker->randomFloat(2,8000, 100000);
            $car->picture = "https://picsum.photos/1200/350?random=". rand(1, 55000);
            $car->save();



        }
    }
}
