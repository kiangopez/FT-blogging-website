<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBlogsController extends Controller
{
    public function myBlogs()
    {
        return view('myBlogs');
        // View all the blogs by user
    }
}
