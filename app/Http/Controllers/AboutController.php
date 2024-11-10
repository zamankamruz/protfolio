<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);

       
        $aboutMe = About::firstOrNew();


        $aboutMe->title = $request->input('title');
        $aboutMe->description = $request->input('description');


        if ($request->hasFile('image')) {

            if ($aboutMe->image) {
                Storage::delete('public/' . $aboutMe->image);
            }


            $path = $request->file('image')->store('public/images');
            $aboutMe->image = str_replace('public/', '', $path);
        }

        $aboutMe->save();

        return redirect()->back()->with('success', 'About Me section updated successfully.');
    }
}
