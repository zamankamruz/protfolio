<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'icon_path' => 'string',
            'title' => 'required|string|max:255',
            'value' => 'required|integer',
        ]);

        Counter::create($request->all());

        return redirect()->back()->with('success', 'Counter added successfully.');
    }

    public function update(Request $request, Counter $counter)
    {
        $request->validate([
            'icon_path' => 'required|string',
            'title' => 'required|string|max:255',
            'value' => 'required|integer',
        ]);

        $counter->update($request->all());

        return redirect()->back()->with('success', 'Counter updated successfully.');
    }

    public function destroy(Counter $counter)
    {
        $counter->delete();

        return redirect()->back()->with('success', 'Counter deleted successfully.');
    }
}
