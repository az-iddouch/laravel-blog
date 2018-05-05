<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Mail\Welcome;


use App\User;

class RegistrationController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        //validate the form 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'

        ]);

        //create and save the user

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        //sign them in
        auth()->login($user);


        \Mail::to($user)->send(new Welcome($user));


        //flash a message to the user when sign up
        session()->flash('message', "welcome to LaraBlog !  $user->name ");

        //redirect to home 
        return redirect()->home();
    }
}
