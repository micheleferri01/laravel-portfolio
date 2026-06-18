<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $typologies = ['Web design', 'Back end', 'Graphic design', 'Front end'];

        foreach($typologies as $typology){
            $newTypology = new Typology();
            $newTypology->name = $typology;
            $newTypology-> save();
        }
        
    }
}
