<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your provided credentials are invalid.']);
            // return back()
            //     ->withInput()
            //     ->withErrors(['email' => 'Your provided credentials are invalid.']);
        }

        //avoid session fixation
        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
