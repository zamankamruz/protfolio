<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeSection;

use DB;
use App\Models\About;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Section;
use App\Models\Service;
use App\Models\Achievement;
use App\Models\Counter;







class AdminController extends Controller
{

    public function admin_dashboard(){

        return view('admin.admin_dashboard');

    }

    public function hear(){

        $homeSection = HomeSection::first();

        return view('admin.page.hear', compact('homeSection'));
        
        
    }

    public function information(){

        $about = About::first();

        return view('admin.page.information', compact('about') );
    }
    
    public function skill(){

        $skills = Skill::all();
        return view('admin.page.skill', compact('skills'));


    }
    

    public function experience(){

        $experiences = Experience::all();
        return view('admin.page.experience', compact('experiences'));
    }
    
    public function education(){

        $educations = Education::all();
        return view('admin.page.education', compact('educations'));
    }



    

    public function add_service(){
        $sections = Section::all();
        return view('admin.page.add_service', compact('sections'));
    }

    public function list_service()
    {
        $services = Service::all();

        return view('admin.page.list_service', compact('services'));
    }

    public function achivement(){

        $achievement = Achievement::first();
        $counters = Counter::all();


        return view('admin.page.achivement', compact('achievement', 'counters'));
    }


    public function add_work(){
        return view('admin.page.add_work');
    }

    public function list_work(){
        return view('admin.page.list_work');
    }


    public function add_plan(){
        return view('admin.page.add_plan');
    }

    public function list_plan(){
        return view('admin.page.list_plan');
    }


    public function add_testimonial(){
        return view('admin.page.add_testimonial');
    }

    public function list_testimonial(){
        return view('admin.page.list_testimonial');
    }


    public function contact(){
        return view('admin.page.contact');
    }



}
