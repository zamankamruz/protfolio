<?php

// app/Http/Controllers/ExperienceController.php
namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Education;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    




    // Store a new experience
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_year' => 'required|integer',
            'end_year' => 'nullable|integer',
            'duration' => 'required|integer',
            'description' => 'required|string',
        ]);

        Education::create($request->all());

        return redirect()->route('admin.education')->with('success', 'Education added successfully.');
    }


    // Update a specific experience
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_year' => 'required|integer',
            'end_year' => 'nullable|integer',
            'duration' => 'required|integer',
            'description' => 'required|string',
        ]);

        $education->update($request->all());

        return redirect()->route('admin.education')->with('success', 'Education updated successfully.');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.education')->with('success', 'Education deleted successfully.');
    }
}
