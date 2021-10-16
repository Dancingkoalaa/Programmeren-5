<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $id = Auth::id();

        $user = user::all()
            ->where('id', '=', $id);

            return view('auth.profile', compact('user'));

    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255'
        ]);
        $user->name = $validated['name'];
        $user->email = $validated['email'];


        if ($user->save())
        {
            return redirect('/');
        }
    }
}
