<?php

// app/Http/Controllers/SkillController.php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|between:0,100',
        ]);

        Skill::create($request->only(['name', 'percentage']));

        return redirect()->back()->with('success', 'Skill added successfully!');
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'percentage' => 'required|integer|between:0,100',
        ]);

        $skill->update($request->only(['name', 'percentage']));

        return redirect()->back()->with('success', 'Skill updated successfully!');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }
}
