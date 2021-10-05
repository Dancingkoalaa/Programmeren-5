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

    public function create()
    {
        return view('characters.Character-Create');
    }

    public function store(Request $request)
    {
        $character = new character;
        $character->Name = $request->input('Name');
        $character->Race = $request->input('Race');
        $character->proficiency = $request->input('Proficiency');
        $character->icon = $request->input('icon');
        $character->portrait = $request->input('portrait');
        $character->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $character = Character::find($id);
        return view('characters.Character-Edit', compact('character'));
    }

    public function update(Request $request, $id)
    {
        $character = Character::find($id);
        $character->name = $request->input('Name');
        $character->race = $request->input('Race');
        $character->proficiency = $request->input('Proficiency');
        $character->update();
        return redirect()->back();
    }

    public function showID($id){
        $character = Character::findOrFail($id);
        return view('characters.Character-Details', compact('character'));
    }

    public function deleteID($id) {
        $character = Character::find($id);
        $character->delete();
        //return view('characters.index', compact('title', 'characters'));
        return redirect()->back();
    }
}
