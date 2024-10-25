<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            ['name' => 'PHP', 'image' => 'PHP.webp', 'order' => 1],
            ['name' => 'Bootstrap', 'image' => 'Bootstrap.webp', 'order' => 2],
            ['name' => 'CakePHP', 'image' => 'Cake.webp', 'order' => 3],
            // Add more entries as needed
        ];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
