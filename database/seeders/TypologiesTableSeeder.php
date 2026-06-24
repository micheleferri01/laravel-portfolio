<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $typologies = ['Web design', 'Back end', 'Graphic design', 'Front end'];

        foreach($typologies as $typology){
            $newTypology = new Typology();
            $newTypology->name = $typology;
            $newTypology->description = $faker->sentence(27);
            $newTypology-> save();
        }
        
    }
}
