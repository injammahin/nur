<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    // Display list of statistics
    public function index()
    {
        $statistics = Statistic::all();
        return view('backend.statistics.index', compact('statistics'));
    }

    // Show the form to create a new statistic
    public function create()
    {
        return view('backend.statistics.create');
    }

    // Store a new statistic in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'value' => 'required|integer',
        ]);

        Statistic::create([
            'title' => $request->title,
            'value' => $request->value,
        ]);

        return redirect()->route('backend.statistics.index')->with('success', 'Statistic added successfully!');
    }

    // Show the form to edit an existing statistic
    public function edit($id)
    {
        $statistic = Statistic::findOrFail($id);
        return view('backend.statistics.edit', compact('statistic'));
    }

    // Update an existing statistic
    public function update(Request $request, $id)
    {
        $request->validate([
            'value' => 'required|integer',
        ]);

        $statistic = Statistic::findOrFail($id);
        $statistic->update([
            'value' => $request->value,
        ]);

        return redirect()->route('backend.statistics.index')->with('success', 'Statistic updated successfully!');
    }
    // Add this method to delete a statistic
public function destroy($id)
{
    $statistic = Statistic::findOrFail($id);
    $statistic->delete();

    return redirect()->route('backend.statistics.index')->with('success', 'Statistic deleted successfully!');
}

}
