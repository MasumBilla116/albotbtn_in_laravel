<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\VideoContentController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\postController;
use App\Http\Controllers\ckeditorController;
// use App\Http\Controllers\usersController;


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

/*
___________________________________________________________
    User Authentication
___________________________________________________________
*/ 
Route::group(["middleware"=>"web"],function(){
    Route::get("/logout",function(){ //user logout
    
        if(session('user'))
        {
            session()->forget("user");
            session()->forget("profile");
        }
        return redirect("/");
    });
    Route::get("/",[usersController::class,'index']);
    Route::get("/login",[usersController::class,'userLogin']);
    Route::get("/register",[usersController::class,'userRegister']);
    Route::get('/profile',[usersController::class,'profile']);
    Route::post("/user/login",[usersController::class,'login']);
    Route::post('/update/profile',[usersController::class,'updateProfile']);
    // online exam
    Route::get("/online/{subject}/exam",[pagesController::class,"exam"]);
    Route::post("/online/exam/ans",[pagesController::class,"ans"]);
    // tutorial
    Route::get("/watch/{video}",[pagesController::class,"watch"])->where('video', '(.*)');
    Route::get("/tutorial",[pagesController::class,'tutorial']);
    // post
    Route::get("/post",[pagesController::class,'post']);
    // about
    Route::get("/about",[pagesController::class,'about']);
});

/*
___________________________________________________________
    Admin Authentication
___________________________________________________________
*/ 
Route::group(["middleware"=>"web"],function(){
    /*
     ___________________________________________________________
        dashboard related route controller
    ___________________________________________________________
    */ 
    Route::get("/admin/logout",function(){ //admin logout
        if(session('admin'))
        {
            session()->forget("admin");
            session()->forget("profile");
        }
        return redirect("/admin/login");
    });
    
    Route::get('/admin/login', [usersController::class,'adminLoginPage']);
    Route::post("/admin-user-login",[usersController::class,'adminLogin']);
    Route::get("/admin/profile",[usersController::class,'adminProfile']);

    Route::get("/admin/dashboard",[usersController::class,'dashboard']);
    Route::get("/new/admin/",[usersController::class,'newAdmin']);


    Route::post("/add/admin/",[usersController::class,'addAdmin']);
    Route::post("/add-new-user-register",[usersController::class,'addNewUserRegister']);
    Route::post("/admin/dashboard",[usersController::class,'adminLogin']);

    Route::post("/admin/profile/update",[usersController::class,'adminProfileUpdate']);
    Route::post("/admin/password/update",[usersController::class,'adminPasswordUpdate']);


    /*
    ___________________________________________________________
        Videos related route controller
    ___________________________________________________________
    */ 
    Route::get("/all/video",[VideoContentController::class,'allVideo']);
    Route::get("/new/video/",[VideoContentController::class,'newVideos']);
    Route::get("/category-wise/video/",[VideoContentController::class,'categoryWiseVideos']);
    Route::get("/add/video",[VideoContentController::class,'AddVideo']);
    Route::get("/edit/video/",[VideoContentController::class,'editVideos']);
    Route::get("/update/video/{id}/info",[VideoContentController::class,'updateVideoInfo']);

    Route::post("/upload/video",[VideoContentController::class,'uploadVideo']);
    Route::post("/update/video",[VideoContentController::class,'saveUpdateVideoInfo']);


    /*
    ___________________________________________________________
        Users related route controller 
    ___________________________________________________________
    */ 
    Route::get("/all/user",[usersController::class,'allUser']);
    Route::get("/edit/user",[usersController::class,"editUser"]);
    Route::get("/delete/user",[usersController::class,"deleteUser"]);
    Route::get("/active/user",[usersController::class,"activeUser"]);
    Route::get("/disabled/user",[usersController::class,"disabledUser"]);


        
    /*
    ___________________________________________________________
        Country related route controller
    ___________________________________________________________
    */ 
    Route::get("/user/country/{country}",[countryController::class,"CountryWiseUser"]);
    Route::get("/add/country/",[countryController::class,"addCountry"]);
    Route::get("/all/country/",[countryController::class,"allCountry"]);
    Route::get("/edit/country/",[countryController::class,"editCountry"]);


    /*
    ___________________________________________________________
        Random pages router controller
    ___________________________________________________________
    */
    Route::get("/user/{email}/details",[pagesController::class,"showUserFromEmail"]);


        
    /*
    ___________________________________________________________
        Exam  router controller 
    ___________________________________________________________
    */
    Route::get("/add/exam/question/",[ExamController::class,"addQuestionsAndAns"]);
    Route::get("/add/course/",[ExamController::class,"addCourse"]);
    Route::get("/add/exam/duration/mark",[ExamController::class,"addExamDuration"]);
    Route::get("/all/question/ans/",[ExamController::class,"allQuestionAndAns"]);
    Route::get("/edit/{id}/question/ans/",[ExamController::class,"editQuestionAndAns"]);

    Route::post("/delete/question/",[ExamController::class,"deleteQuestion"]);
    Route::post("/store/question/ans",[ExamController::class,'storeQuestionAndAns']);
    Route::post("/store/course",[ExamController::class,"storeCourse"]);
    Route::post("/update/question/ans",[ExamController::class,'updateQuestionAndAns']);


    /*
    ___________________________________________________________
        Post router
    ___________________________________________________________
    */
    Route::get("/add/post",[postController::class,"addPost"]);
    Route::get("/all/post",[postController::class,"allPost"]);
    Route::get("/edite/post/{id}",[postController::class,"editePost"]);

    Route::post("/store/post",[postController::class,"storePost"]);
    Route::post("/update/post",[postController::class,"updatePost"]);
    Route::post("/delete/post",[postController::class,"deletePost"]);


    
});




















/*
___________________________________________________________
    ck Editor route
___________________________________________________________
*/
Route::post("/upload",[ckeditorController::class,"imgUpload"])->name("ckeditor.upload");