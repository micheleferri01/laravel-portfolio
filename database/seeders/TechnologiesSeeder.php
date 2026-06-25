<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = ['Html', 'Javascript', 'Css', 'React', 'Express.js', 'Node.js', 'Php', 'Laravel'];

        foreach($technologies as $technology){
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->color = $faker->hexColor();
            $newTechnology->save();
        }
    }
}
