<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPostData = Post::paginate(10);
        return view('backend.posts.index', ['allPosts' => $allPostData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.posts.create', ['categories'=> $categories ]);
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


        if ($request->hasFile('feature_image')) {
            $filePath = Storage::disk('public')->put('images/posts/feature_image', request()->file('feature_image'));
            $post->feature_image = $filePath;
        }
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
        return view ('backend.posts.edit', ['singlePost'=>$post, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, string $id)
    {
        $validated = $request->validated();
        $post = Post::where('id', $id)->first();

        if (File::exists(public_path('storage/'. $post->feature_image)))
        {
            Storage::delete(storage_path('app/public/'. $post->feature_image));
        }
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->category_id = $validated['category_id'];
        if ($request->hasFile('feature_image')) {
            $filePath = Storage::disk('public')->put('images/posts/feature_image', request()->file('feature_image'));
            $post->feature_image = $filePath;
        }
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
