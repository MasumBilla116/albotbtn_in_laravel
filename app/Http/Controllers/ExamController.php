<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\question;
use App\Models\answer;
use App\Models\answerdescription;

class examController extends Controller
{
    public function addQuestionsAndAns()
    {
        $course = course::all();
        return view("exam.add-question-and-ans",compact("course"));
    }
    
    public function storeQuestionAndAns(Request $req)
    {
        $req->validate([
            "course" => "required",
            "question" => "required"
        ]);
        
        $question = new question;
        $opA = new answer;
        $opB = new answer;
        $opC = new answer;
        $opD = new answer;

        $des = new answerdescription;
        $des->description = $req->ansdes;
        
        $question->question = $req->question;
        $question->course_id = $req->course; 
        
        $opA->option = $req->optiona;
        $opA->correct_ans = $req->ansa;
        
        $opB->option = $req->optionb;
        $opB->correct_ans = $req->ansb;
        
        $opC->option = $req->optionc;
        $opC->correct_ans = $req->ansc;
        
        $opD->option = $req->optiond;
        $opD->correct_ans = $req->ansd;
        
        if($question->save())
        {
            $quesId = question::max("id");
            $opA->question_id = $quesId;
            $opB->question_id = $quesId;
            $opC->question_id = $quesId;
            $opD->question_id = $quesId;
            $des->question_id = $quesId;
            
            $opA->save();
            $opB->save();
            $opC->save();
            $opD->save();
            $des->save();

            session()->put("message","Inserted successfully");
            return back();
        }
        else
        {
            session()->put("message","Something is wrong");
            return back();
        }
        
    }
    public function deleteQuestion(Request $req)
    {
        $question = question::where("id",$req->qid)->first();
        if($question->delete())
        {
            session()->put("message","Deleted successfully ");
            return back();
        }
        else
        {
            session()->put("message","Something is worng");
            return back();
        }
    }
    public function addCourse()
    {
        $course = course::all();
        return view("exam.add-course",compact('course'));
    }
    
    public function storeCourse(Request $req)
    {
        $req->validate([
            "course" => "required"
        ]);
        $newCourse = new course;
        $newCourse->course_name = $req->course;
        if($newCourse->save())
        {
            session()->put('message',"Course inserted successfully");
            return back();
        }
        else
        {
            session()->put("message","Something is worng please try again");
            return back();
        }
    }
    public function editQuestionAndAns($id)
    {
        $question = question::where("id",$id)->first();
        $ans = answer::where("question_id",$id)->get();
        $des = answerdescription::where("question_id",$id)->first();
        $course = course::all();
        return view("exam.edit-question-and-ans",compact("question","ans","des","course"));
    }

    public function updateQuestionAndAns(Request $req)
    {
        
        $question = question::where("id",$req->qid)->first();
        $opA = answer::where("id",$req->opaid)->where("question_id",$req->qid)->first();
        $opB = answer::where("id",$req->opbid)->where("question_id",$req->qid)->first();
        $opC = answer::where("id",$req->opcid)->where("question_id",$req->qid)->first();
        $opD = answer::where("id",$req->opdid)->where("question_id",$req->qid)->first();

        $des = answerdescription::where("question_id",$req->qid)->first();
        $des->description = $req->description;
        
        $question->question = $req->question;
        $question->course_id = $req->course; 
        
        $opA->option = $req->optiona;
        $opA->correct_ans = $req->ansa;
        
        $opB->option = $req->optionb;
        $opB->correct_ans = $req->ansb;
        
        $opC->option = $req->optionc;
        $opC->correct_ans = $req->ansc;
        
        $opD->option = $req->optiond;
        $opD->correct_ans = $req->ansd;
        
        if($question->save())
        {
            $opA->save();
            $opB->save();
            $opC->save();
            $opD->save();
            $des->save();
            session()->put("message","Updated successfully");
            return redirect("/all/question/ans");
        }
        else
        {
            session()->put("message","Something is wrong");
            return back();
        }
    }

    public function addExamDuration()
    {
        return view("exam.add-exam-duration");
    }

    public function allQuestionAndAns()
    {
        $option = answer::all();
        $ques = question::select([
            "questions.id as q_id",
            "courses.id as c_id",
            "courses.*",
            "questions.*",
        ])->join("courses","courses.id","questions.course_id")->orderBy('questions.id', 'desc')->get();;
        return view("exam.all-question-and-ans",compact('ques',"option"));
    }
   

   
}  