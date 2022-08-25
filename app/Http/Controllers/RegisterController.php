<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {
        //create the user
        $attributes = request()->validate([
            'firstName' => 'required|max:255|min:3',
            'lastName' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            'gender' => 'required|max:255|min:3',
        ]);

        students::create($attributes);

        return redirect()->route('homework');

    }
}
