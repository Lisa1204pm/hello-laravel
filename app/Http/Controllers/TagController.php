<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function create() {
        return view('tag.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => 'nullable',
        ]);

        $attributes['slug'] = Str::slug($attributes['name']);
        
        Tag::create($attributes);
        session()->flash('success','Tag Created Successfully');

        return redirect('/admin/projects');
    }

    public function edit(Tag $tag) {
        return view('tag.create')
        ->with('tag', $tag);
    }

    public function getTagsJSON()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function update(Tag $tag, Request $request) {
        $attributes = request()->validate([
            'name' => 'required',
        ]);

        // Generate the slug from the title
        $attributes['slug'] = Str::slug($attributes['name']);
        
        $tag -> update($attributes);
        // Set a flash message
        session()->flash('success','Tag updated Successfully');

        return redirect('/admin/projects');
    }

    public function destroy(Tag $tag) {
        $tag->delete();

        // Set a flash message
        session()->flash('success','Tag Deleted Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin/projects');
    }
}
