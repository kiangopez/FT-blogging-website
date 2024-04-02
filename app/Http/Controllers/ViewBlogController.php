<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewBlogController extends Controller
{
    public function blog()
    {
        return view('blog');
        // View a specific blog when clicked
    }
}
