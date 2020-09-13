@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row py-5">
        <div class="col-md-8 p-0">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="My Photos">
        </div>
        <div class="col-md-4 p-0">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <img class="w-100 rounded-circle border border-dark" src="/storage/{{ $post->user->profile->image }}" alt="Profile Picture" style="max-width: 40px">
                        <a href="/profile/{{ $post->user->username }}">
                            <p class="font-weight-bold px-2">{{ $post->user->username }}</p>
                        </a>
                    </div>
                    <hr>
                    <div> 
                        <p>
                            <a href="/profile/{{ $post->user->username }}">
                                <b>{{ $post->user->username }}</b> 
                            </a>
                            {{ $post->caption }}
                        </p>
                    
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <span class="text-muted"><b>More posts from </span><a href="" >{{ $post->user->username }}</b></a>
    <div class="row">
        
        @forelse($post->user->posts as $post)
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
