<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\tutorial;
use App\Models\course;
use App\Models\post;

class usersController extends Controller
{
    
    public function index(){
        $post = post::orderBy("id")->limit(4)->get();
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        $tutorial = tutorial::select([
            "tutorials.id as t_id",
            "tutorials.*",
            "courses.*"
        ])->join("courses","tutorials.course_id","courses.id")->orderBy("t_id","desc")->get();
        return view("index",compact("tutorial","examCourse","post"));
    }
    
    public function newAdmin(){
        return view('user.new-admin');
    }
    
    public function addAdmin(Request $req){
        $req->validate([
            'email' => "required | email",
            "password" => "required",
            "name"=>"required"
        ]);
        $newAdmin = new User;
        $newAdmin->name = $req->name;
        $newAdmin->profile = "/storage/user/avater.png";
        $newAdmin->email = $req->email;
        $newAdmin->role = 1;
        $newAdmin->password = Hash::make($req->password);
        if($newAdmin->save())
        {
            $req->session()->put("admin",$req->email);
            $req->session()->put("message","Data inserted Successfully");
            return back();
        }
        else{
            $req->session()->put("message","Data inserted  faield !! Please try again");
            return back();
        }
        
    }

    public function adminLoginPage()
    {
        if(session("admin"))
        {
            return redirect('/admin/dashboard'); 
        }
        else if(session("user"))
        {
            return redirect("/"); 
        }
        else
        {
            return view("user.admin-login"); 
        }
       
        
        
    }

    public function adminLogin(Request $req){
        $req->validate([
           "email"=>"required | email",
           "password"=>"required" 
        ]);
        $user = User::where("email",$req->email)->where("role",1)->first();
        if($user){
            if($user && Hash::check($req->password,$user->password))
            {
                $req->session()->put("admin",$user->email);
                $req->session()->put("profile",$user->profile);
                return redirect("admin/dashboard");
            }
            else{
                $req->session()->put("message","Email or password is not matching");
                return back();
            }
        }
        else{
            
            $req->session()->put("message","Email or password is not matching");
            
            return back();
        }
        
   }

   public function adminProfile()
   {
       return view("user/admin-profile");
   }

   public function adminProfileUpdate(Request $req)
   {
       $req->validate([
          "file" => "required | image",
       ]);
       $user = User::where("email",session("admin"))->where("role",1)->first();
       if($user && $req->hasfile("file"))
       {
           $user->profile = $this->removePublic($req->file("file")->store("public/user"));
           if($user->save())
           {
               session()->put("message","Profile updated successfully");
               session()->put("profile",$user->profile);
               return back();
           }
           else
           {
               $req->session()->put("message",'Something is worng !! Please try agani');
               return back();
           }
       }
       else
       {
           return redirect("/admin/login");
       } 
   }

   public function removePublic($src)
   {
       return str_replace("public/","storage/",$src);
   }

   public function adminPasswordUpdate(Request $req)
   {
       $req->validate([
           "new-password" => "required",
           "old-password" => "required"
       ]);
       $user = User::where("email",session("admin"))->where("role",'1')->first();
       
       if($user && Hash::check($req->input('old-password'),$user->password))
       {
           $user->password = Hash::make($req->input('new-password'));
           if($user->save())
           {
                $req->session()->put("message","Password update successfully");
                return back();
           }
           else
           {
            $req->session()->put("message","Something is worng please try again");
            return back();
           }
       }
       else
       {
           $req->session()->put("message","Your password is not matching");
           return back();
       }
   }

    public function userLogin()
    {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        return view("pages/user-login",compact("examCourse"));
    }
    public function login(Request $req)
    {
        $req->validate([
           "email" => "required | email",
           "password" => "required" 
        ]);
        $user = User::where("email",$req->email)->where("role",3)->first();
        if($user && Hash::check($req->password,$user->password))
        {
            $req->session()->put("user",$user->email);
            $req->session()->put("profile",$user->profile);
            return redirect("/");
        }
        else
        {
            session()->put("message","Email or Password not exist");
            return back();
        }
    }
    
    public function userRegister()
    {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        return view("pages/user-register",compact("examCourse"));
    }

    public function addNewUserRegister(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required | email",
            "password" => "required"
        ]);
        $user = User::where("email",$req->email)->first();
        if(!$user)
        {
            $newUser = new User;
            $newUser->name = $req->name;
            $newUser->email = $req->email;
            $newUser->password = Hash::make($req->password);
            $newUser->profile = "/storage/user/avater.png";
            $newUser->role = 3;
            if($newUser->save())
            {
                session()->put("profile",$newUser->profile);
                session()->put("user",$newUser->email);
                return redirect("/");
            }
            else
            {
                $req->session()->put("message","Something is worng please try again");
                return back();
            }
        }
        else
        {
            $req->session()->put("message","Your email is exist");
            return back();
        }
    }

    public function profile()
    {
        if(session("user"))
        {
            $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
            return view("pages/user-profile",compact("examCourse"));
        }
        else
        {
            return redirect('/login');
        }
        
    }

    public function updateProfile(Request $req)
    {
        $req->validate([
            "file" => "required|image",
        ]);
        $user = User::where("email",session("user"))->where("role",3)->first();
       if($user && $req->hasfile("file"))
       {
           $user->profile = $this->removePublic($req->file("file")->store("public/user"));
           if($user->save())
           {
               session()->put("message","Profile updated successfully");
               session()->put("profile",$user->profile);
               return back();
           }
           else
           {
               $req->session()->put("message",'Something is worng !! Please try agani');
               return back();
           }
       }
       else
       {
           return back("/");
       } 
        
    }
    
    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function editUser()
    {
        $examCourse = course::select(["courses.*"])->join("questions","questions.course_id","courses.id")->distinct("course_name")->get();
        return view("user.editUser",compact("examCourse"));
    }
    public function allUser()
    {
        return view("user.allUser");
    }
    public function activeUser()
    {
        return view("user.activeUser");
    }
    public function disabledUser()
    {
        return view("user.disabledUser");
    }
    public function deleteUser()
    {
        return view("user.deleteuser");
    }
}