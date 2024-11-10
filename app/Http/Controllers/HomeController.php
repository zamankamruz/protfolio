<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use App\Models\About;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Section;
use App\Models\Service;
use App\Models\Achievement;
use App\Models\Counter;




use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){


        $homeSection = HomeSection::first();
        $about = About::first();
        $skills = Skill::all();
        $experiences = Experience::all();
        $educations = Education::all();
        $sections = Section::all();
        $services = Service::all();
        $achievement = Achievement::first();
        $counters = Counter::all();





        return view('frontend.home', compact('homeSection', 'about',
         'skills', 'experiences', 'educations', 'sections', 'services', 'achievement', 'counters'));
    }
}
