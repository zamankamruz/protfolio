<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CounterController;





use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {

    // Dashboard and Admin Routes
    Route::get('/dashboard', [AdminController::class, 'admin_dashboard'])->name('dashboard');
    Route::get('/hear', [AdminController::class, 'hear'])->name('admin.hear');
    Route::get('/information', [AdminController::class, 'information'])->name('admin.information');
    Route::get('/experience', [AdminController::class, 'experience'])->name('admin.experience');
    Route::get('/add/service', [AdminController::class, 'add_service'])->name('admin.add_service');
    Route::get('/achivement', [AdminController::class, 'achivement'])->name('admin.achivement');
    Route::get('/add/work', [AdminController::class, 'add_work'])->name('admin.add_work');
    Route::get('/list/work', [AdminController::class, 'list_work'])->name('admin.list_work');
    Route::get('/add/plan', [AdminController::class, 'add_plan'])->name('admin.add_plan');
    Route::get('/list/plan', [AdminController::class, 'list_plan'])->name('admin.list_plan');
    Route::get('/add/testimonial', [AdminController::class, 'add_testimonial'])->name('admin.add_testimonial');
    Route::get('/list/testimonial', [AdminController::class, 'list_testimonial'])->name('admin.list_testimonial');
    Route::get('/contact', [AdminController::class, 'contact'])->name('admin.contact');


    Route::put('/about/update', [AboutController::class, 'update'])->name('about.update');

    // Home Section Route
    Route::put('/home-section/update', [HomeSectionController::class, 'update'])->name('home-section.update');



    // Route::get('/admin/skills', [SkillController::class, 'index'])->name('skills.index');
    Route::get('/skill', [AdminController::class, 'skill'])->name('admin.skill');
    Route::post('/admin/skills', [SkillController::class, 'store'])->name('skills.store');
    Route::put('/admin/skills/{skill}', [SkillController::class, 'update'])->name('skills.update');
    Route::delete('/admin/skills/{skill}', action: [SkillController::class, 'destroy'])->name('skills.destroy');


    Route::resource('experiences', ExperienceController::class);




    Route::get('/education', [AdminController::class, 'education'])->name('admin.education');
    Route::post('/dashboard/education', [EducationController::class, 'store'])->name('education.store');
    Route::put('/dashboard/education/{education}', [EducationController::class, 'update'])->name('education.update');
    Route::delete('/dashboard/education/{education}', [EducationController::class, 'destroy'])->name('education.destroy');


    Route::get('/add/service', [AdminController::class, 'add_service'])->name('admin.add_service');
    Route::get('/list/service', [AdminController::class, 'list_service'])->name('admin.list_service');
    Route::put('/sections/{section}', [SectionController::class, 'update'])->name('admin.sections.update');



    Route::resource('services', ServiceController::class);



    Route::put('/achievements/{achievement}', [AchievementController::class, 'update'])->name('admin.achievements.update');



    Route::post('/counters', [CounterController::class, 'store'])->name('admin.counters.store');
    Route::put('/counters/{counter}', [CounterController::class, 'update'])->name('admin.counters.update');
    Route::delete('/counters/{counter}', [CounterController::class, 'destroy'])->name('admin.counters.destroy');






    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});










require __DIR__.'/auth.php';
