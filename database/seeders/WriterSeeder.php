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
            'profile_image' => 'image.smilingman.jpg'
        ],
        [   'name' => 'Devrin Hocellino',
            'category_id' => '2',
            'profile_image' => 'image.smilingman.jpg'
        ],
        [   'name' => 'Wilbert Luciano Sulastio',
            'category_id' => '2',
            'profile_image' => 'image.smilingman.jpg'
        ],
        [   'name' => 'Furina',
            'category_id' => '2',
            'profile_image' => 'image.smilingman.jpg'
        ],
        [   'name' => 'Hu Tao',
            'category_id' => '2',
            'profile_image' => 'image.smilingman.jpg'
        ],
        ];

        foreach($writers as $writer){
            Writer::create($writer);
        }
    }
}
