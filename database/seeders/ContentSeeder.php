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

        $contents = [
            [
                'title' => 'Apa itu Data Science?',
                'body' => 'Data Science adalah ilmu yang mempelajari dan menganalisis data untuk mendapatkan informasi yang berguna dan membantu pengambilan keputusan.',
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => 1,
                'image' => 'datascience.jpg'
            ],
            [
                'title' => 'Prospek Karir Data Science',
                'body' => 'Mungkin kamu yang kini sedang tertarik berkarier di bidang data science Indonesia pernah berpikir bahwa prospek karier data science di Indonesia itu hanya terbatas di startup atau perusahaan yang bergerak di bidang IT saja.',
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => 1,
                'image' => 'datascience.jpg'
            ],
            [
                'title' => 'Apa itu Network Security?',
                'body' => 'Network security atau keamanan jaringan adalah langkah-langkah yang dilakukan untuk melindungi jaringan komputer dari ancaman dan serangan.',
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => 2,
                'image' => 'network-security.jpg'
            ],
            [
                'title' => 'Kenapa Network Security Penting?',
                'body' => 'Network security atau keamanan jaringan adalah langkah-langkah yang dilakukan untuk melindungi jaringan komputer dari ancaman dan serangan.',
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => 2,
                'image' => 'network-security.jpg'
            ],
            [
                'title' => 'Apakah Kita Harus Fokus Pada Network Security?',
                'body' => 'Network security bertugas untuk melindungi perangkat keras (hardware) ataupun perangkat lunak (software). lorem ipsum dolor sit amet hua ako litnut cuh ase oke',
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => 2,
                'image' => 'network-security.jpg'
            ],
        ];

        foreach($contents as $content){
            Content::create($content);
        }

        for($i = 0; $i < 1; $i++){
            Content::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'release_date' => $faker->date(),
                'writer_id' => $writers->random()->id,
                'category_id' => $categories->random()->id,
                'image' => 'smilingman.jpg'
            ]);
        }
    }
}
