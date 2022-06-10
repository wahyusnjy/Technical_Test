<?php

namespace App\Http\Controllers;

use App\Models\{
    Post,
    Category
};
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('category')->latest()->get();
        return view('pages.posts.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('pages.posts.create', compact('categories'));
    }

    public function store(Request $request){
        Post::Create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->content,
            'desc' => $request->desc,
        ]);

        return redirect('/');
    }

    public function show(Post $post ){
        return view('pages.categories.showDetails', compact('post'));
    }
}
