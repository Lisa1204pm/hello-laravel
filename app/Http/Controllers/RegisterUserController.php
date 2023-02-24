<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function create() {
        return view('register_user.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8','confirmed'],
        ]);

        $user = User::create($attributes);

        auth()->login($user);
        return redirect('/');
    }
    public function edit(User $user) {
        return view('register_user.edit')
        ->with('user', $user);
    }

    public function update(User $user, Request $request) {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'password' => ['required','min:8','confirmed'],
        ]);
        
        $user -> update($attributes);
        // Set a flash message
        session()->flash('success','User updated Successfully');

        return redirect('/admin/projects');
    }
    public function destroy(User $user) {
        $user->delete();

        // Set a flash message
        session()->flash('success','User Deleted Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin/projects');
    }
}
