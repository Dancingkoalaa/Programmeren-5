<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $title = "Login";
        $username = "gebruikersnaam";
        $password = "wachtwoord";


        return view("Login", compact('title', 'username', 'password'));
    }
}
