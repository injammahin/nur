<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 100 visitors for today's date
        for ($i = 0; $i < 100; $i++) {
            Visitor::create([
                'visited_at' => Carbon::today(), // Set the visit date to today
                'ip_address' => fake()->ipv4(), // Generate random IP addresses
            ]);
        }
    }
}
