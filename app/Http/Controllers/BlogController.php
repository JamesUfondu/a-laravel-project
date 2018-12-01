<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostFaker;

class BlogController extends Controller
{
    public function index()
    {
    $posts = PostFaker::paginate(10);
    return view('blog.index', compact('posts'));
    }
}
