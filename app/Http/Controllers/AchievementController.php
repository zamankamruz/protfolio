<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{


    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $achievement->update($request->only(['title', 'description']));

        return redirect()->back()->with('success', 'Achievement updated successfully.');
    }
}
