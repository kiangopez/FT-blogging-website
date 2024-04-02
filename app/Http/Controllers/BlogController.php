<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog()
    {
        return view('createBlog');
        // Code to create the blog
    }
}
