<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitorsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(array $labels, array $visitorsData): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Website Visitors')
            ->setSubtitle('Visitors for the selected filter')
            ->addData('Visitors', $visitorsData)
            ->setXAxis($labels);
    }
}
