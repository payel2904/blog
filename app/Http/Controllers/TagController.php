<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allTagData= Tag::paginate(10);
        return view('backend.tags.index', ['allTags'=> $allTagData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagStoreRequest $request)
    {
        $validated = $request->validated();
        $tag= new Tag;
        $tag->name = $validated['name'];
        $tag->save();

        return redirect()->route('tags.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('backend.tags.show', ['singleTag'=>$tag]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('backend.tags.edit',['singleTag'=>$tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagUpdateRequest $request, string $id)
    {
        $validated = $request->validated();
        $tag = Tag::where('id', $id)->first();
        $tag->name = $validated['name'];
        $tag->save();

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::where('id', $id)->delete();
        return redirect()->route('tags.index');
    }
}
