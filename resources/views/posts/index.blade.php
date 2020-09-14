@extends('layouts.app')

@section('content')
<div class="container">
    
    @forelse($posts as $post)
    <div class="row py-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <img class="w-100 rounded-circle border border-dark" src="{{ $post->user->profile->profileImage() }}" alt="Profile Picture" style="max-width: 40px">
                        </div>
                        <div>
                            <a class="text-dark" href="/profile/{{ $post->user->username }}">
                                <p class="font-weight-bold px-2">{{ $post->user->username }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="w-100" src="/storage/{{ $post->image }}" alt="My Photos">
            </div>
            <div class="card">
                <div class="card-body">
                    <div> 
                        <p>
                            <a class="text-dark" href="/profile/{{ $post->user->username }}">
                                <b>{{ $post->user->username }}</b> 
                            </a>
                            {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <hr>
    <h1 class="text-center">No Following yet.</h1>
    @endforelse
</div>
@endsection
