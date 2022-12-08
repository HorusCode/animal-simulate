<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::factory()->count(4)->for(Animal::inRandomOrder()->first())->create();
    }
}
