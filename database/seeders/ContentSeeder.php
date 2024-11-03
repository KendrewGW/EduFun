<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Content;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 
use Random\Factory as Random;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $writers = Writer::all();
        $categories = Category::all();

        for($i = 0; $i < 2; $i++){
            Content::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => $categories->random()->id
            ]);
        }
    }
}
