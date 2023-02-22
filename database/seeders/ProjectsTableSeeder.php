<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->unique()->sentence(5);
            $newProject->slug = Str::slug($newProject->title);
            $newProject->thumb = $faker->imageUrl(360, 360, 'computers', true);
            $newProject->used_language = $faker->word();
            $newProject->link = $faker->url();
            $newProject->project_date = $faker->dateTimeThisYear();
            $newProject->save();
        }
    }
}
