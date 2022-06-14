<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event([
            'imagePath' => 'https://i.harperapps.com/hcuk/covers/9780007203543/x450.JPG',
            'title' => 'Nur-Sultan Half Marathon 2022',
            'description' => 'Nur-Sultan Half Marathon 2022 is the first half marathon in the capital from «Смелость быть первым». Distances: 10 km and 21.1 km.',
            'city' => 'NurSultan',
            'time' => '17/06 ',
            'price' => 12
        ]);

        $event->save();
    }
}
