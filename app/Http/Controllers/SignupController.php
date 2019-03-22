<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //

    /**
     * Responsible for showing the sign-up form
     *
     * @return void
     */
    public function showSignUp() {
        return view('auth.register');
    }

    
    public function onBoard(Request $request) {
        $token = $request->input();
        return $token;
    }
}
