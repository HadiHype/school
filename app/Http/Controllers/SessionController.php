<?php

namespace App\Http\Controllers;

use App\Models\homework;
use App\Models\students;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionController extends Controller
{

    public function create() {
        return view('sessions.login');
    }

    public function destroy() {
        auth()->guard('students')->logout();

        return redirect('login')->with('success', 'GoodBye');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->guard('students')->attempt($attributes)) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect()->route('homework');
    }

}
