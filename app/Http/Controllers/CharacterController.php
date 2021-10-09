<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Character Sheet!!';

//        $characters = Character::all();
        //$characters = Character::where('active', '1')->get();
        $search = $request->input('search');

        if (!$search) {

            $characters = Character::all()
                ->where('active', '=', 1);
        } else {
            $characters = Character::where('name','like','%'.$search.'%')
                ->where('active', '=', 1)
                ->orderBy('id')
                ->paginate(6);
        }

        return view('characters.index', compact('title', 'characters'));
    }

    public function create()
    {
        return view('characters.Character-Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Race'=>'required',
            'Proficiency'=>'required',
        ]);

        if($request->hasFile('icon')){
            $request->validate([
                'icon' => 'mimes:jpeg,jpg,png,bmp',
            ]);

            $request->icon->store('icon', 'public');
        }
        if($request->hasFile('portrait')) {
            $request->validate([

                'portrait' => 'mimes:jpeg,jpg,png,bmp'
            ]);

            $request->portrait->store('portrait', 'public');

            $character = new character;
            $character->Name = $request->input('Name');
            $character->Race = $request->input('Race');
            $character->proficiency = $request->input('Proficiency');
            $character->icon = $request->icon->hashName();
            $character->portrait = $request->portrait->hashName();
            $character->save();
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $character = Character::findOrFail($id);
        return view('characters.Character-Edit', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'race' => 'required|max:255',
            'proficiency' => 'required|max:255'
        ]);
        $character->Name = $validated['name'];
        $character->Race = $validated['race'];
        $character->proficiency = $validated['proficiency'];

        if ($request['icon'] !== null)
        {
            $validated = $request->validate([
                'icon' => 'required|image|mimes:jpeg,png,jpg'
            ]);
            $validated['icon']->store('icon', 'public');
            $character->icon = $validated['icon']->hashName();
        }
        if ($request['portrait'] !== null)
        {
            $validated = $request->validate([
                'portrait' => 'required|image|mimes:jpeg,png,jpg'
            ]);
            $validated['portrait']->store('portrait', 'public');
            $character->portrait = $validated['portrait']->hashName();
        }

        if ($character->save())
        {
            return redirect('/');
        }
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
