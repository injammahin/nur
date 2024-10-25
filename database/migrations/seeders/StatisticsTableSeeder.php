<?php

use Illuminate\Database\Seeder;
use App\Models\Statistic;

class StatisticsTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'Tech Partners', 'value' => 78],
            ['title' => 'Years of Experience', 'value' => \Carbon\Carbon::now()->year - 2016],
            ['title' => 'Countries Served', 'value' => 32],
            ['title' => 'IT Professionals', 'value' => 100],
            ['title' => 'Projects Completed', 'value' => 92],
        ];

        foreach ($data as $item) {
            Statistic::create($item);
        }
    }
}
