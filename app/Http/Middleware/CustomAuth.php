<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       $path = $request->path();
       if((($path == 'login' || $path == "register" || $path == "admin/login") && session("user")))
       {
           return redirect("/");
       }
       else if((session('user') && ($path == "admin/dashboard" 
       || $path == "admin/profile" 
       || $path == "new/admin/" 
       || $path == "add/admin/" 
       || $path == "admin/profile/update" 
       || $path == "admin/password/update" 
       || $path == "all/video" 
       || $path == "new/video/" 
       || $path == "category-wise/video/" 
       || $path == "add/video" 
       || $path == "edit/video/" 
       || $path == "update/video/{id}/info" 
       || $path == "upload/video" 
       || $path == "update/video" 
       || $path == "all/user" 
       || $path == "delete/user" 
       || $path == "active/user" 
       || $path == "disabled/user" 
       || $path == "user/country/{country}" 
       || $path == "add/country/" 
       || $path == "all/country/"
       || $path == "edit/country/"
       || $path == "user/{email}/details"
       || $path == "add/exam/question/"
       || $path == "add/course/"
       || $path == "add/exam/duration/mark"
       || $path == "all/question/ans/"
       || $path == "edit/{id}/question/ans/"
       || $path == "delete/question/"
       || $path == "store/question/ans"
       || $path == "store/course"
       || $path == "update/question/ans"
       || $path == "add/post"
       || $path == "all/post"
       || $path == "edite/post/{id}"
       || $path == "store/post"
       || $path == "update/post"
       || $path == "delete/post"
       )))
       {
            return redirect("/");
       }
       else if((session('admin') && ($path == "admin/dashboard" 
       || $path == "admin/profile" 
       || $path == "new/admin/" 
       || $path == "add/admin/" 
       || $path == "admin/profile/update" 
       || $path == "admin/password/update" 
       || $path == "all/video" 
       || $path == "new/video/" 
       || $path == "category-wise/video/" 
       || $path == "add/video" 
       || $path == "edit/video/" 
       || $path == "update/video/{id}/info" 
       || $path == "upload/video" 
       || $path == "update/video" 
       || $path == "all/user" 
       || $path == "delete/user" 
       || $path == "active/user" 
       || $path == "disabled/user" 
       || $path == "user/country/{country}" 
       || $path == "add/country/" 
       || $path == "all/country/"
       || $path == "edit/country/"
       || $path == "user/{email}/details"
       || $path == "add/exam/question/"
       || $path == "add/course/"
       || $path == "add/exam/duration/mark"
       || $path == "all/question/ans/"
       || $path == "edit/{id}/question/ans/"
       || $path == "delete/question/"
       || $path == "store/question/ans"
       || $path == "store/course"
       || $path == "update/question/ans"
       || $path == "add/post"
       || $path == "all/post"
       || $path == "edite/post/{id}"
       || $path == "store/post"
       || $path == "update/post"
       || $path == "delete/post"
       )))
       {
            return $next($request);
       }
       else if(((!session('admin') && !session('user')) && ($path == "admin/dashboard" 
       || $path == "admin/profile" 
       || $path == "new/admin/" 
       || $path == "add/admin/" 
       || $path == "admin/profile/update" 
       || $path == "admin/password/update" 
       || $path == "all/video" 
       || $path == "new/video/" 
       || $path == "category-wise/video/" 
       || $path == "add/video" 
       || $path == "edit/video/" 
       || $path == "update/video/{id}/info" 
       || $path == "upload/video" 
       || $path == "update/video" 
       || $path == "all/user" 
       || $path == "delete/user" 
       || $path == "active/user" 
       || $path == "disabled/user" 
       || $path == "user/country/{country}" 
       || $path == "add/country/" 
       || $path == "all/country/"
       || $path == "edit/country/"
       || $path == "user/{email}/details"
       || $path == "add/exam/question/"
       || $path == "add/course/"
       || $path == "add/exam/duration/mark"
       || $path == "all/question/ans/"
       || $path == "edit/{id}/question/ans/"
       || $path == "delete/question/"
       || $path == "store/question/ans"
       || $path == "store/course"
       || $path == "update/question/ans"
       || $path == "add/post"
       || $path == "all/post"
       || $path == "edite/post/{id}"
       || $path == "store/post"
       || $path == "update/post"
       || $path == "delete/post"
       )))
       {
            return redirect("/admin/login");
       }
        return $next($request);
    }
}