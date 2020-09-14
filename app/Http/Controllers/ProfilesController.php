<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index($username) 
    {
        $user = User::where('username', $username)->firstOrFail();

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        return view('profiles.index', compact('user', 'follows'));

        
    }

    public function edit($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        $this->authorize('update', $user->profile);
        
        
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'title'         => 'required',
            'description'   => 'required',
            'url'           => 'required',
            'image'         => ''
        ]);

        if(request('image')) {

            $imagePath = request('image')->store('profile_img', 'public');

            $imageHash = explode('.', request('image')->hashName())[0];

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(300,300);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/{$user->username}");
    }
}
