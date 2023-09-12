<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();
        for ($i = 0; $i < 100; $i++){
            $fakeTrain = new Train();
            $fakeTrain->azienda = fake()->words(1, true);
            $fakeTrain->{'stazione di partenza'} = fake()->words(1, true);
            $fakeTrain->{'stazione di arrivo'} = fake()->words(1, true);
            $fakeTrain->giorno_di_partenza = fake()->dateTime();
            $fakeTrain->{'orario di partenza'} = fake()->time(); // Usa il formato corretto per l'orario
            $fakeTrain->{'orario di arrivo'} = fake()->time();   // Usa il formato corretto per l'orario
            $fakeTrain->{'codice treno'} = rand(10000, 999999);           // Usa il nome con spazi tra le virgolette
            $fakeTrain->{'numero carrozze'} = rand(5,30);            // Usa il nome con spazi tra le virgolette
            $fakeTrain->{'in orario'} = true;                // Usa il nome con spazi tra le virgolette
            $fakeTrain->cancellato = false;
            
            $fakeTrain->save();
            
            
    }
}
}