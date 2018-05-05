<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        
        if(! Auth::attempt(request(['email', 'password']))) {
            
            return back()->withErrors([
                'message' => 'Please check your credintials and try again '
            ]);
        
        }


        return redirect()->home();

        //attempt to authentificate the user 

        //if not redirect back


        //if so , sign them in 


        //redirecto to home page 
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

}
