<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index')
        ->with('projects', Project::all())
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('users', User::all());
    }

    public function show(Project $project)
    {
        return view('projects.project',['project' => $project]);
    }

    
}
