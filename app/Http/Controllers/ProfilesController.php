<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($username) 
    {
        $user = User::where('username', $username)->firstOrFail();
        return view('pages.profile', compact('user'));

        // return view('layouts.app', compact('user'));
    }
}
