<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::where('user_id', 1)->get();
        $projects = Projects::get();
        return view('home',[
            "title" => "Home",
            "active" => "home",
            "user" => User::find(1),
            "posts" => $posts,
            "projects" => $projects
        ]);
    }
}
