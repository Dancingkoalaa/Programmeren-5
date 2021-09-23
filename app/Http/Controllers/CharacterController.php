<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $title = 'Character Sheet!!';
        //get data from character model
        $characters = Character::all();
        //SELECT * FROM characters
        //dd($characters);
        //pass data on to character view
        return view('characters.index', compact('title', 'characters'));
    }
}
