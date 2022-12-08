<?php

namespace Database\Seeders;

use App\Models\Animal;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'type' => 'cat',
                'max_age' => 15,
                'max_size' => 20,
                'url' => 'images/cat.svg',
                'growth_factor' => 20 / 15,
            ],
            [
                'type' => 'dog',
                'max_age' => 22,
                'max_size' => 40,
                'url' => 'images/dog.svg',
                'growth_factor' => 40 /  22,

            ],
            [
                'type' => 'bear',
                'max_age' => 10,
                'max_size' => 100,
                'url' => 'images/bear.svg',
                'growth_factor' => 100 / 10,
            ],
            [
                'type' => 'bird',
                'max_age' => 2,
                'max_size' => 5,
                'url' => 'images/bird.svg',
                'growth_factor' => 5 / 2,
            ]
        ];

        foreach ($data as $arr) {
            Animal::create($arr);
        }
    }
}
