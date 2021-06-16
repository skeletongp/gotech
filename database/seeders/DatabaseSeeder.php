<?php

namespace Database\Seeders;

use App\Models\Frases;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $frase = new Frases();
        $frase->autor='Thomas Huxley';
        $frase->frase='Intenta aprender algo sobre todo y todo sobre algo.';
        $frase->foto='thomas.jpg';
        $frase->save();

        $frase = new Frases();
        $frase->autor='Bruce Lee';
        $frase->frase='Un hombre sabio puede aprender más de una preguntaa estupida de lo que un tonto puede aprender de una respuesta sabia.';
        $frase->foto='bruce.jpg';
        $frase->save();

        $frase = new Frases();
        $frase->autor='Henry Ford';
        $frase->frase='Cualquiera que para de aprender se hace viejo, tanto si tiene 20 como 80 años. Cualquiera que sigue aprendiendo permanece joven. Esta es la grandeza de la vida.';
        $frase->foto='ford.jpg';
        $frase->save();

        $frase = new Frases();
        $frase->autor='Aristóteles';
        $frase->frase='Somos lo que hacemos repetidamente. La excelencia, entonces, no es un acto, es un hábito.';
        $frase->foto='aristoteles.jpg';
        $frase->save();
        
    }
}
