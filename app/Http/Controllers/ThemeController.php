<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(4);
        return view('theme.index', compact('blogs'));
    }

    public function category($id)
    {

        $blogs = Blog::where('category_id', $id)->paginate(8);
        $categoryName = Category::find($id)->name;

        return view('theme.category', compact('blogs', 'categoryName'));
    }

    public function contact()
    {
        return view('theme.contact');
    }

    public function singleBlog()
    {
        return view('theme.single-blog');
    }

    public function register()
    {
        return view('theme.register');
    }

    public function login()
    {
        return view('theme.login');
    }
}
