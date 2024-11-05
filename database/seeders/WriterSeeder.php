<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $writers = [
        [   'name' => 'Raka Putra Wicaksono',
            'category_id' => '1',
            'profile_image' => 'smilingman.jpg'
        ],
        [   'name' => 'Furina',
            'category_id' => '2',
            'profile_image' => 'furina-shocked.jpg'
        ],
        [   'name' => 'Jack Speed',
            'category_id' => '2',
            'profile_image' => 'man.jpg'
        ],
        ];

        foreach($writers as $writer){
            Writer::create($writer);
        }
    }
}
