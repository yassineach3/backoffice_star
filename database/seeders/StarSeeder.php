<?php

namespace Database\Seeders;

use App\Models\Star;
use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Star::factory()->count(5)->create();
    }
}
