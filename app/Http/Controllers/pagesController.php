<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutorial;
use Illuminate\Support\Facades\Hash;
use App\Models\question;
use App\Models\course;
use App\Models\answer;
use App\Models\answerdescription;
use App\Models\post;

class pagesController extends Controller
{
    
    public function showUserFromEmail($email){
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        return view("pages/userEmail",compact('email',"examCourse"));
    }
    public function exam($subject)
    {
        if(session('user'))
        {
            $answerdescription = answerdescription::all();
            $answer = answer::all();
            $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
            $course = course::where("course_name",$subject)->first();
            $question = question::where("course_id",$course->id)->inRandomOrder()->limit(10)->get();
            return view("pages.exam",compact("subject","question","examCourse","answer","answerdescription"));
        }
        else
        {
            
            return redirect("/login");
        }
        
    }

    public function ans(Request $req)
    {
        $question = question::all();
        $correctAns = 0;
        $totalQuestion = $req->totalquestion;
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        
        for($i=1;$i<=count($req->question);$i++)
        {
            
                $answer = answer::where("question_id",$req->question[$i])->where("id",$req->option[$i])->where("correct_ans",'on')->first();
                if($answer)
                {
                    $correctAns++;
                }
            
        }
        return view("pages.ans",compact("examCourse","correctAns","totalQuestion"));
    }
    
    public function watch($video)
    {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        $tuto = tutorial::all();
        $id = null;
        foreach($tuto as $row)
        {
            $id = $row->id;
            if(Hash::check($video,Hash::make($row->id)))
            {
                break;
            }
        } 
        $watch = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"
        ])->join("courses","tutorials.course_id","courses.id")->where("tutorials.id",$id)->first();
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"
        ])->join("courses","tutorials.course_id","courses.id")->orderBy("t_id","desc")->get();
        return view("pages.watch",compact('watch','tutorial',"tuto","examCourse"));
    }

   public function tutorial()
   {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"
        ])->join("courses","tutorials.course_id","courses.id")->orderBy("t_id","desc")->get();
        return view("pages/tutorial",compact("tutorial","examCourse"));
   }

   public function post()
   {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        $post = post::orderBy("id")->get();
       return view("pages/post",compact("examCourse","post"));
   }

   public function about()
   {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
       return view("pages/about",compact("examCourse"));
   }

}