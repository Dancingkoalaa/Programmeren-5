<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Character Sheet!!';

        //gives the value to $search from the view
        $search = $request->input('search');

        //checks if $search is empty. if true it shows all active Characters
        if (!$search) {

            $characters = Character::all()
                ->where('active', '=', 1);
        //If $search is not empty it will show all characters that match the input and orders them by ID
        } else {
            $characters = Character::where('name','like','%'.$search.'%')
                ->where('active', '=', 1)
                ->orderBy('id')
                ->paginate(6);
        }

        return view('characters.index', compact('title', 'characters'));
    }

    public function changeCharacterStatus(Request $request)
    {

        $user_id = Auth::id();
        //checks if the user is the same as the creator and they are it will find the chosen character to allow the user to edit them
        if ($user_id == $character->user_id) {
        $character = Character::find($request->id);
        $character->active = $request->active;
        $character->save();

        return response()->json(['success'=>'Character status change successfully.']);
            //if the user is not the same as the creator (can only if user tries to acces using link) they will get Error 401 (unauthorised)
            } else {
        abort(401);
        }
    }

    public function create()
    {
        //if the user is logged in this will let the user create their own character
        return view('characters.Character-Create');
    }

    public function store(Request $request)
    {
        //checks if the inputs are all filled and if they meet the requirements
        $request->validate([
            'Name'=>'required',
            'Race'=>'required',
            'Proficiency'=>'required',
        ]);
        //checks if the input is filled and if it meets the requirements (including the image type)
        if($request->hasFile('icon')){
            $request->validate([
                'icon' => 'mimes:jpeg,jpg,png,bmp',
            ]);
            //places the image in the public/icon folder
            $request->icon->store('icon', 'public');
        }
        //checks if the input is filled and if it meets the requirements (including the image type)
        if($request->hasFile('portrait')) {
            $request->validate([

                'portrait' => 'mimes:jpeg,jpg,png,bmp'
            ]);
            //places the image in the public/portrait folder
            $request->portrait->store('portrait', 'public');

            //makes the database create a new row and adds all data to the row (also checks the active user id and adds that)
            $character = new character;
            $character->Name = $request->input('Name');
            $character->Race = $request->input('Race');
            $character->proficiency = $request->input('Proficiency');
            $character->icon = $request->icon->hashName();
            $character->portrait = $request->portrait->hashName();
            $character->user_id = \Auth::user()->id;
            $character->save();
        }
        return redirect()->back();
    }
    public function edit($id)
    {
        $character = Character::findOrFail($id);

        $user_id = Auth::id();

        //if the user is not the same as the creator (can only if user tries to acces using link) they will get Error 401 (unauthorised)
        if ($user_id == $character->user_id) {
            return view('characters.Character-Edit', compact('character'));
        } else {
            abort(401);
        }
    }

    public function update(Request $request, Character $character)
    {
        //checks if the inputs are all filled and if they meet the requirements
        $validated = $request->validate([
            'name' => 'required|max:255',
            'race' => 'required|max:255',
            'proficiency' => 'required|max:255'
        ]);
        //lets the items from the selected row get updated in the database (if the data is validated)
        $character->Name = $validated['name'];
        $character->Race = $validated['race'];
        $character->proficiency = $validated['proficiency'];

        //checks if there also is an icon in the list of new data, if there is, this will also be updated
        if ($request['icon'] !== null)
        {
            $validated = $request->validate([
                'icon' => 'required|image|mimes:jpeg,png,jpg'
            ]);
            $validated['icon']->store('icon', 'public');
            $character->icon = $validated['icon']->hashName();
        }
        //checks if there also is an portrait in the list of new data, if there is, this will also be updated
        if ($request['portrait'] !== null)
        {
            $validated = $request->validate([
                'portrait' => 'required|image|mimes:jpeg,png,jpg'
            ]);
            $validated['portrait']->store('portrait', 'public');
            $character->portrait = $validated['portrait']->hashName();
        }
        //checks if the save button has been clicked. if it has, it will update hte data and send the user back
        if ($character->save())
        {
            return redirect('/');
        }
    }


    //checks which id was selected and shows the details of the selected character
    public function showID($id)
    {
        $character = Character::findOrFail($id);
        return view('characters.Character-Details', compact('character'));
    }

    public function deleteID($id) {
        $character = Character::find($id);
        $user_id = Auth::id();
        //checks if the user who tried to delete the character has the same id as the creator. if not it will redirect the user to a 401 page
        if ($user_id == $character->user_id) {

        $character->delete();

        return redirect()->back();
        } else {
            abort(401);
        }
    }
}
