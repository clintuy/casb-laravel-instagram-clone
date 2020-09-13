@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 p-5">
            <img class="w-100 rounded-circle border border-dark" src="/storage/{{ $user->profile->image }}" alt="Profile Picture">
        </div>
        <div class="col-sm-12 col-md-9 p-5">


            <div class="d-flex justify-content-between align-items-baseline">
            
                <div class="d-flex align-items-center pb-3">
                    <h1>{{ $user->name }}</h1>
                </div>

                @can('create', $user->profile)
                    <a class="btn btn-primary" href="/post/create">Add New Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
             <a href="/profile/edit/{{ $user->username }}">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>24K</strong> Followers</div>
                <div class="pr-5"><strong>62K</strong> Following</div>
            </div>
            

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="description">{{ $user->profile->description }}</div>
            <div><a href="https://{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <hr>
    <div class="row">

        @forelse($user->posts as $post)
            <div class="col-sm-12 col-md-4 py-3">
                <a href="/post/{{ $post->image_hash }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="My Photos">
                </a>
            </div>
        @empty
            <div class="col-md-12 text-center p-5">
                <h1>No post yet</h1>
            </div>
        @endforelse
    </div>
</div>
@endsection
