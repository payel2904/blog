<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPostData = Post::with(['category', 'tag'])->paginate(10);
        return view('backend.posts.index', ['allPosts' => $allPostData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('backend.posts.create', ['categories' => $categories , 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $validated = $request->validated();

        $post= new Post;
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->category_id = $validated['category_id'];
        $post->tag_id = $validated['tag_id'];
        $post->save();

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id', $id)->first();
        return view('backend.posts.show', ['singlePost'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id', $id)->first();
        $categories = Category::get();
        $tags = Tag::get();
        return view('backend.posts.edit', ['singlePost'=>$post, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, string $id)
    {
        $validated = $request->validated();
        $post = Post::where('id', $id)->first();
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->category_id = $validated['category_id'];
        $post->tag_id = $validated['tag_id'];
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('posts.index');
    }
}
