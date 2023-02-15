<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet($name = 'Earthling') {
        return view('welcome')
        ->with('name', $name)
        ->with('salutation', 'Greetings');
    }
}
