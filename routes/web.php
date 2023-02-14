<?php

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\PortfolioProjectController;
use App\Http\Controllers\backend\resume\EducationController;
use App\Http\Controllers\backend\resume\ExperienceController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FrontendController;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function(){

    Route::prefix('admin')->group(function(){

            Route::get('/dashboard',[AdminController::class,'AdminDashboard'])->name('admin_dashboard');

            Route::get('/logout',[AdminController::class,'AdminLogout'])->name('admin_logout');

            Route::get('/profile',[AdminController::class,'AdminProfile'])->name('admin_profile');

            Route::get('/edit/{id}',[AdminController::class,'AdminEdit'])->name('admin_edit');

            Route::post('/update/{id}',[AdminController::class,'AdminUpdate'])->name('admin_update');

            Route::get('/change-password/{id}',[AdminController::class,'AdminPassword'])->name('admin_password');

            Route::post('/pass-update/{id}',[AdminController::class,'AdminPasswordUpdate'])->name('admin_password_update');



            Route::prefix('home')->group(function(){

                Route::get('/manage',[HomeController::class,'manage'])->name('admin_home_manage');

                // Route::get('/create',[HomeController::class,'create'])->name('admin_home_create');
                Route::post('/store',[HomeController::class,'store'])->name('admin_home_store');

                Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin_home_edit');
                Route::post('/update/{id}',[HomeController::class,'update'])->name('admin_home_update');
                Route::get('/delete/{id}',[HomeController::class,'destroy'])->name('admin_home_delete');



                

            });



            Route::prefix('about')->group(function(){

                Route::get('/manage',[AboutController::class,'manage'])->name('admin_about_manage');

                Route::get('/create/{id}',[AboutController::class,'create'])->name('admin_about_create');
                Route::post('/update/{id}',[AboutController::class,'update'])->name('admin_about_update');

                
              


                

            });



            Route::prefix('skills')->group(function(){

                // Route::get('/manage',[HomeController::class,'manage'])->name('admin_home_manage');

                Route::get('/create',[SkillController::class,'create'])->name('admin_skills_create');
                Route::post('/store',[SkillController::class,'store'])->name('admin_skills_store');

                // Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin_home_edit');
                // Route::post('/update/{id}',[HomeController::class,'update'])->name('admin_home_update');
                // Route::get('/delete/{id}',[HomeController::class,'destroy'])->name('admin_home_delete');



                

            });



            Route::prefix('resume')->group(function(){

                // Route::get('/manage',[HomeController::class,'manage'])->name('admin_home_manage');

                Route::get('/eduction/create',[EducationController::class,'create'])->name('admin_resume_education_create');
                Route::post('/eduction/store',[EducationController::class,'store'])->name('admin_resume_education_store');

                // Route::get('/edit/{id}',[HomeController::class,'edit'])->name('admin_home_edit');
                // Route::post('/update/{id}',[HomeController::class,'update'])->name('admin_home_update');
               
                // Route::get('/delete/{id}',[HomeController::class,'destroy'])->name('admin_home_delete');
               
                Route::get('/experience/create',[ExperienceController::class,'create'])->name('admin_resume_experience_create');

                Route::post('/experience/store',[ExperienceController::class,'store'])->name('admin_resume_experience_store');
                
                Route::post('/experience-point/store',[ExperienceController::class,'PointStore'])->name('admin_resume_experience_point');

                
                

            });


            Route::prefix('portfolio-category')->group(function(){

                Route::get('/create',[PortfolioCategory::class,'create'])->name('admin_portfolio_category_create');

                Route::post('/store',[PortfolioCategory::class,'store'])->name('admin_portfolio_category_store');
              
                

            });

            
            Route::prefix('portfolio-project')->group(function(){

                Route::get('/create',[PortfolioProjectController::class,'create'])->name('admin_portfolio_project_create');

                Route::post('/store',[PortfolioProjectController::class,'store'])->name('admin_portfolio_project_store');
              
                

            });
    

            Route::prefix('contact')->group(function(){

                Route::get('/pending',[ContactController::class,'PendingContact'])->name('admin_contact_pending');

                Route::get('/pending-approve/{id}',[ContactController::class,'PendingApproveContact'])->name('admin_contact_approve');

                Route::get('/approved',[ContactController::class,'ApproveContact'])->name('admin_contact_approved');

                
              
                

            });


            Route::prefix('services')->group(function(){

                Route::get('/create',[ServiceController::class,'create'])->name('admin_services_create');

                Route::post('/store',[ServiceController::class,'store'])->name('admin_service_store');

                // Route::get('/approved',[ContactController::class,'ApproveContact'])->name('admin_contact_approved');

                
              
                

            });

            
            Route::prefix('seo')->group(function(){

                Route::get('/manage',[AdminController::class,'manage'])->name('admin_seo_manage');

                Route::post('/update/{id}',[AdminController::class,'update'])->name('admin_seo_update');

              
                

            });
    
            
            

            



});
});






/////////////////////////////////////////FRONTEND ROUTE///////////////////////////////


Route::get('/',[FrontendController::class,'index'])->name('dashboard');



// Portfolio Project Detail Route 

Route::get('/portfolio-project/details/{id}',[FrontendController::class,'PortfolioProjectDetail'])->name('portfolio_project_detail');


// Contact Store Route 

Route::post('/contact-store',[ContactController::class,'store'])->name('contact_store');



require __DIR__.'/auth.php';
