<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Typology;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typologies = Typology::all();
        
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->name = $faker->sentence(3);
            $newProject->author = $faker->name();
            $newProject->client = $faker->company();
            $newProject->resume = $faker->sentence(23);
            $newProject->typology_id = $faker->randomElement($typologies->pluck('id')->toArray());
            $newProject->save();
        }
    }
}
