<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $title = 'Character Sheet!!';

        $characters = Character::all();
        //$characters = Character::where('active', '1')->get();

        return view('characters.index', compact('title', 'characters'));
    }

    public function showID($id){
        $character = Character::findOrFail($id);
        return view('characters.Character-Details', compact('character'));
    }
}
