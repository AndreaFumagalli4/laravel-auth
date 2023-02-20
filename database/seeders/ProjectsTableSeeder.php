<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->sentence(5);
            $newProject->thumb = $faker->image(null, 360, 360);
            $newProject->used_language = $faker->randomElement(['HTML', 'CSS', 'JS', 'VueJS', 'PHP', 'Laravel']);
            $newProject->link = $faker->url();
            $newProject->save();
        }
    }
}
