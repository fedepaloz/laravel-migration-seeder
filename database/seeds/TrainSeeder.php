<?php

use App\Train;

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $new_train = new Train();
            $new_train->stazione_di_partenza = $faker->cityPrefix();
            $new_train->stazione_di_arrivo = $faker->cityPrefix();
            $new_train->orario_di_partenza =$faker->time();
            $new_train->orario_di_arrivo =$faker->time(); 
            $new_train->codice_treno = $faker->postcode();
            $new_train->numero_carrozze = $faker->postcode();
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
