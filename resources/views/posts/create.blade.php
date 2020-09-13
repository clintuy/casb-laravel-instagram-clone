@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/post" method="POST" enctype="multipart/form-data">
    @csrf
        
        <div class="col-md-8 offset-md-2">
     
            <div class="row">
                <h1>Add new post</h1>
            </div>


            <div class="form-group row">
                <label for="caption">Post Caption</label>
                <input 
                    id="caption"
                    name="caption"
                    class="form-control @error('caption') is-invalid @enderror" 
                    type="text"
                    value="{{ old('caption') }}"
                    autocomplete="caption"
                    autofocus
                />

                @error('caption')
                    <span class="invalid-feedback pb-3" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            

            <div class="row">
                <label for="image">Post Image</label>
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
                <button class="btn btn-primary" type="submit">Add new post</button>
            </div>
        </div>
    </form>
    
</div>
@endsection
