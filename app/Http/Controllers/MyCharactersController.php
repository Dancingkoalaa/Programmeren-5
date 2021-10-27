<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyCharactersController extends Controller
{
    public function index()
    {
        $title = "My profile";

        $user_id = Auth::id();

        $user = User::findOrFail($user_id);

        $favorites = $user->characters;

        //gets every character from the database that match the id of the logged in creator
        if ($user->role == 'Admin') {
            $myCharacters = Character::all();
        } else {
            $myCharacters = Character::all()
                ->where('user_id', '=', $user_id);
        }
        return view('characters.MyCharacters', compact('title', 'myCharacters', 'favorites'));
    }
}
