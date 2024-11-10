<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'years_experience' => 'required|integer|min:0',
            'description' => 'required|string',
        ]);

        Experience::create($request->all());

        return redirect()->back()->with('success', 'Experience added successfully!');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'years_experience' => 'required|integer|min:0',
            'description' => 'required|string',
        ]);
    
        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
    
        return redirect()->back()->with('success', 'Experience updated successfully!');
    }
    


    public function destroy($id)
    {
        $experience = Experience::findOrFail(id: $id);
        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted successfully!');
    }
}
