<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home '
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Orlando Riski',
            'email' => 'orlando@gmail.com'
        ]);
    }

    public function blog()
    {
        return view('blog', [
            "title" => "Blog",
            // from model Post call all method assign to post variabel
            "post" => Post::all()
        ]);
    }

    public function detail(Post $post)
    {
        return view('detail', [
            'title' => 'Detail',
            // from model Post call find method with slug parameter
            //"post" => Post::find($slug)
            "post" => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => 'Category',
            'post' => $category->posts,
            'category' => $category->name
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }
}
