<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required','image']
        ]);

        $imagePath = request('image')->store('upload_img', 'public');

        $imageHash = explode('.', request('image')->hashName())[0];

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(600,600);
        $image->save();
        
        auth()->user()->posts()->create([
            'caption'       => $data['caption'],
            'image'         => $imagePath,
            'image_hash'    => $imageHash
        ]);

        return redirect('/profile/' . auth()->user()->username);
    }

    public function show($image_hash)
    {
        $post = Post::where('image_hash', $image_hash)->firstOrFail();
        return view('posts.show', compact('post'));
    }
    
}
