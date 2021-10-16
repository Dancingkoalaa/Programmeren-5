<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCharactersController extends Controller
{
    public function index()
    {
        $title = "My profile";
        $id = Auth::id();

        //$favouriteCharacters = CharacterUser::where('user_id','=', $id);

        $myCharacters = Character::all()
            ->where('user_id','=', $id);

        return view('characters.MyCharacters', compact('title', 'myCharacters'));
    }
}
