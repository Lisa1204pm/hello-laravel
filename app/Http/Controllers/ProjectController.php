<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $projects = [
        [
            'id' => 0,
            'title' => 'Node.js Yearbook',
            'description' => 'Details coming soon...',
            'is_published' => false
        ],
        [
            'id' => 1,
            'title' => 'React Movie App',
            'description' => '...',
            'is_published' => false
        ],
        [
            'id' => 3,
            'title' => 'Laravel Portfolio Back-End',
            'description' => 'In progress.  Stay tuned.',
            'is_published' => false
        ]
    ];
    return view('projects.index')
    ->with('projects', $projects);
    }

    public function show($project)
    {
        $project= [
            'id' => 4,
            'title' => 'Vue.js Portfolio Front-End',
            'description' => '...',
            'is_published' => false
        ];
        return view('projects.project', ['project' => $project]);
    }
    
    public function home()
    {
        return view('welcome');
    }
    
}
