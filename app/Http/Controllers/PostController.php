<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\String\s;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPostRecord = Post::with('category')->paginate(2);
        $i = 1;
        return view('backend.posts.index', ['posts' => $allPostRecord, 'i' => $i]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $validated = $request->validated();
        $post = new Post;
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        if ($request->hasFile('feature_image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('feature_image'));
            $post->feature_image = $filePath;
        }
        $post->category_id = $validated['category_id'];

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('backend.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::get();
        return view('backend.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $validated = $request->validated();

        if (File::exists(public_path('storage/' . $post->feature_image))) {
            Storage::delete(storage_path('app/public/' . $post->feature_image));
        }

        $post->title = $validated['title'];
        $post->description = $validated['description'];
        if ($request->hasFile('feature_image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('feature_image'));
            $post->feature_image = $filePath;
        }

        $post->category_id = $validated['category_id'];

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
