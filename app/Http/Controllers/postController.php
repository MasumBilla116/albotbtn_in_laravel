<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\tutorial;
use App\Models\User;

class postController extends Controller
{
    public function addPost()
    {
        return view("post.add-post");
    }

    public function storePost(Request $req)
    {
        $req->validate([
            "post" => "required"
        ]);
        
        $post = new post;
        $post->post = $req->post;

        if($post->save())
        {
            session()->put("message","Inserted successfully");
            return back();
        }
        else
        {
            session()->put("message","Something is worng");
            return back();
        }

    }
    
    public function allPost()
    {
        $user = User::count("id");
        $tutorial = tutorial::count("id");
        $post = post::orderBy("id",'desc')->get();
        return view("post.all-post",compact('post','user','tutorial'));
    }

    public function editePost($id)
    {
        $post = post::where("id",$id)->first();
        return view("post/edite-post",compact("post"));
    }

    public function updatePost(Request $req)
    {
        $req->validate([
            "post"=>"required" 
        ]);

        $post = post::where("id",$req->pid)->first();
        $post->post = $req->post;
        if($post->save())
        {
            session()->put("message","Updated successfully");
            
            return redirect('/all/post');
        }
        else
        {
            session()->put("message","Something is worng");
            return back();
        }
    }

    public function deletePost(Request $req)
    {
        $post = post::where("id",$req->pid)->first();
        if($post->delete())
        {
            session()->put("message","Deleted successfully");
            return redirect('/all/post');
        }
        else
        {
            session()->put("message","Something is worng");
            return back();
        }
    }
}