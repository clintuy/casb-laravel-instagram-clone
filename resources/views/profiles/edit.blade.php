@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/profile/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        
        <div class="col-md-8 offset-md-2">
     
            <div class="row">
                <h1>Edit profile</h1>
            </div>


            <div class="form-group row">
                <label for="title">Title</label>
                <input 
                    id="title"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror" 
                    type="text"
                    value="{{ old('title') ?? $user->profile->title }}"
                    autocomplete="title"
                    autofocus
                />

                @error('title')
                    <span class="invalid-feedback pb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="url">URL/Website</label>
                <input 
                    id="url"
                    name="url"
                    class="form-control @error('url') is-invalid @enderror" 
                    type="text"
                    value="{{ old('url') ?? $user->profile->url }}"
                    autocomplete="url"
                />

                @error('url')
                    <span class="invalid-feedback pb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    class="form-control @error('description') is-invalid @enderror" 
                    rows="5"
                    autocomplete="description">{{ old('description') ?? $user->profile->description }}</textarea>

                @error('description')
                    <span class="invalid-feedback pb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            

            <div class="row">
                <label for="image">Display Photo</label>
                <input 
                    id="image"
                    name="image"
                    class="form-control-file"
                    type="file"
                />

                @error('image')
                    <span class="pb-3" role="alert">
                        <strong style="color: #e3342f; font-size: 80%">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            

            <div class="row pt-4">
                <button class="btn btn-primary" type="submit">Update Profile</button>
            </div>
        </div>
    </form>
    
</div>
@endsection
