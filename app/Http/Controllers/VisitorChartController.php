<?php

// namespace App\Http\Controllers;

// use App\Charts\VisitorsChart;
// use Illuminate\Http\Request;

// class VisitorChartController extends Controller
// {
//     public function index(Request $request, VisitorsChart $chart)
//     {
//         // Fetch the filter from the request, default to 'daily'
//         $filter = $request->input('filter', 'daily');
        
//         // Pass the chart data to the view
//         return view('visitors.index', [
//             'chart' => $chart->build($filter),
//             'filter' => $filter
//         ]);
//     }
// }
