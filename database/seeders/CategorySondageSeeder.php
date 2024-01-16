<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySondageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        factory(3)->create();
    }
}
