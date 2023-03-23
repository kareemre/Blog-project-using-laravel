<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        // return Post::latest()->filter(request(['search', 'category', 'author']))->get();
        // dd(request(['search', 'category']));

        return view('posts.index', [
        
        'posts'=>  Post::latest()->filter(request(['search', 'category', 'author']))->Paginate(6)->withQueryString()  
    ]);

        
    }

    public function show(Post $post)
    {
        return view('posts.show', [ 
            'post' => $post
        ]);
    }
    
}
