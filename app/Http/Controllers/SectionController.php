<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{



    public function update(Request $request, Section $section)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'description' => 'required',
        ]);
    
        $section->update($request->only(['title', 'subtitle', 'description']));
    
        return redirect()->route('admin.add_service')->with('success', 'Section updated successfully.');
    }

}

