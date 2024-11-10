<?php

namespace App\Http\Controllers;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeSectionController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'string',
            'subtitle' => 'string',
            'description' => 'string',
            'profile_image' => 'file|mimes:jpg,jpeg,png,gif,svg,pdf,docx', // Specify allowed types
        ]);

        $homeSection = HomeSection::firstOrNew();

        $homeSection->title = $request->title;
        $homeSection->subtitle = $request->subtitle;
        $homeSection->description = $request->description;



    
        if ($request->hasFile('profile_image')) {
            if ($homeSection->profile_image) {
          
                Storage::delete($homeSection->profile_image);
            }
            $homeSection->profile_image = $request->file('profile_image')->store('public/images');
        }

        $homeSection->save();

        return redirect()->back()->with('success', 'Home section updated successfully.');
    }
}
