<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('pages.categories.index', compact('categories'));
    }

    public function create(){
        return view('pages.categories.create');
    }

    public function store(Request $request){
        Category::Create([
            'name' => $request->name,
        ]);

        return redirect('/categories');
    }

    public function show(Request $request, Category $category){
        $posts = $category->posts()->get();

        return view('pages.categories.show', compact('posts','category'));
    }

}
