<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\tutorial;
use App\Models\User;

class VideoContentController extends Controller
{

   
    public function allVideo()
    {
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"]
            )->join("courses","courses.id","tutorials.course_id")->orderBy('tutorials.id','desc')->get();
        $user = User::all();
        $course = course::all();
        return view("videoContent.allVideo",compact('tutorial','user','course'));
    }
    
    public function editVideos()
    {
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"]
            )->join("courses","courses.id","tutorials.course_id")->orderBy('tutorials.id','desc')->get();
        $user = User::all();
        $course = course::all();
        return view("videoContent.editVideo",compact('tutorial','user','course'));
    }

    public function newVideos()
    {
        return view("videoContent.newVideos");
    }

    public function categoryWiseVideos()
    {
        return view("videoContent.categoryWiseVideos");
    }

    public function AddVideo()
    {
        $course = course::all();
        return view("videoContent.add-video",compact("course"));
    }
    
    public function uploadVideo(Request $req)
    {
    
        $req->validate([
            "video" => "required ",
            "thumbnail" => "required | image",
            "title" => "required",
        ]);
        
        $tutorial = new tutorial;
        $tutorial->title = $req->title;
        $tutorial->video_path = $this->removePublic($req->file("video")->store("public/videos"));
        $tutorial->thumnail = $this->removePublic($req->file('thumbnail')->store('public/thumbnail'));
        $tutorial->course_id = $req->course;
        $tutorial->status = true;
        if($tutorial->save())
        {
            session()->put("message","Data inserted successfully");
            return back();   
        }
        else
        {
            session()->put("message","Something is worng");
            return back();   
        }
    }
    public function removePublic($src)
    {
        return str_replace("public/","storage/",$src);
    }
    
    public function updateVideoInfo($id)
    {
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.id as c_id",
            "courses.*"]
            )->join("courses","courses.id","tutorials.course_id")->where('tutorials.id',$id)->first();
        $course = course::all();
        return view("videoContent.update-video-info",compact('tutorial','course'));
    }
    
    public function saveUpdateVideoInfo(Request $req)
    {
        $req->validate([
            "video" => "required | numeric",
           "title" => "required",
           "thumbnail" => "image",
           "course" => "required | numeric",
           "status" => "required" 
        ]);
        
        $updateTuro = tutorial::where("id",$req->video)->first();
        $updateTuro->title = $req->title;
        $updateTuro->course_id = $req->course;
        $updateTuro->status = $req->status;
        $updateTuro->video_path = $updateTuro['video_path'];
        if($req->hasfile('thumbnail'))
        {
            $updateTuro->thumnail = $this->removePublic($req->file('thumbnail')->store('public/thumbnail'));
        }
        else
            $updateTuro->thumnail = $updateTuro['thumnail'];
        if($updateTuro->save())
        {
            session()->put("message","Updated successfully");
            return back();
        }
        else
        {
            session()->put("message","Something is worng");
            return back();
        }
    }

   


    /*
    ------------------------------------
    bellow this all method use in ajax api
    ------------------------------------
    */
    public function activeVideo(Request $req) 
    {
        $tutorial = tutorial::where("id",$req->id)->first();
        $tutorial->status = TRUE;
        if($tutorial->save())
        {
            return response()->json([
               "status" => "success" 
            ]);
        }
        else
        {
            return response()->json([
                "status" => "failed" 
             ]);
        }
    }
    public function disabledVideo(Request $req)
    {
        
        $tutorial = tutorial::where("id",$req->id)->first();
        $tutorial->status = FALSE;
        if($tutorial->save())
        {
            return response()->json([
               "status" => "success" 
            ]);
        }
        else
        {
            return response()->json([
                "status" => "failed" 
             ]);
        }
    }
    
    public function deleteVideo(Request $req)
    {
        $tutorial = tutorial::where("id",$req->id)->first();
        if($tutorial->delete())
        {
            return response()->json([
               "status" => "success" 
            ]);
        }
        else
        {
            return response()->json([
                "status" => "failed" 
             ]);
        }
    }
}