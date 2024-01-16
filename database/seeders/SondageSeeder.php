<?php

namespace Database\Seeders;

use App\Models\Sondage;
use Illuminate\Database\Seeder;

class SondageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sondage::factory(10)->create();
    }
}
