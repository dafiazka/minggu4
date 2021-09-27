<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Post;

class Controller extends Controller
{
    public function getAll(){
        $post = Post::all();
        return view('home', ['post=> $post']);
    }

    public function getById($id){
        $post = Post::find($id);
        return view('post', ['post=> $post']);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
