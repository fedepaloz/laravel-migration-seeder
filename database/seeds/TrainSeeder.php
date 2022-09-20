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
       $new_train = new Train();
       $new_train-> stazione_di_partenza = 'roma';
       $new_train-> stazione_di_arrivo = 'venezia';
       $new_train-> orario_di_partenza= '12';
       $new_train-> orario_di_arrivo = '15';
       $new_train-> codice_treno = '12345';
       $new_train-> numero_carrozze = '22';
       $new_train-> in_orario = 'si';
       $new_train-> cancellato = 'no'; 
       $new_train-> save();
    }
}


