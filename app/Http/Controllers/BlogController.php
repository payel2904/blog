<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $allPost = Post::with(['category'])->orderBy('id', 'DESC')->paginate(10);
        return view('frontend.blogs.index', ['posts' => $allPost]);
    }

    public function show(int $id)
    {
        $post = Post::with(['category'])->where('id', $id)->first();
        return view('frontend.blogs.show', ['post' => $post]);
    }
}
