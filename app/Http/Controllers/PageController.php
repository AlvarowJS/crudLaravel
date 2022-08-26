<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search;
        $posts = Post::where('title','LIKE',"%{$search}%")
            ->with('user')
            ->latest()->paginate();
        
        return view('home',  ['posts' => $posts]);
    }
    public function blog(){        
        // $posts = Post::get();
        // $post = Post::first();
        // $post = Post::find(12);
        // dd($post);
        // paginacion decendente
        

        // dd($posts);
        // colleocion de datos
        return view('blog', ['posts' => $posts]);
    }
    public function post(Post $post){                
        return view('post' ,['post' => $post]);
    }
}
