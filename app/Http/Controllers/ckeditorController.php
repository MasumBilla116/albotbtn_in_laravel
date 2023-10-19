<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ckeditorController extends Controller
{
    public function imgUpload(Request $req)
    {
        // if($req->hasfile('upload'))
        // {
             return response()->json([
                 "success" => $req->file("file")->store("public/post")
             ]);
             
        // }
    }

//     public function removePublic($src)
//    {
//        return str_replace("public/","storage/",$src);
//    }
}