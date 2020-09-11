@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card rounded-0">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body text-center rounded-0 px-5 py-3">
                        <div class="logo">
                            <img class="w-75 px-3" src="/storage/default_img/INSTAGRAM.png" alt="Logo">
                        </div>
                        <div class="text-secondary">Sign up to see photos and videos from your friends.</div>
                        <hr class="py-2">

                        <!-- Email -->
                        <div class="form-group m-0">
                            <input 
                                name="email"
                                class="form-control mb-2 @error('email') is-invalid @enderror" 
                                type="text" 
                                value="{{ old('email') }}"
                                placeholder="Email Address"
                                autocomplete="email" 
                                autofocus 
                            />
                        
                            @error('email')
                                <span class="invalid-feedback text-left pb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Full Name -->
                        <div class="form-group m-0">
                            <input 
                                name="name"
                                class="form-control mb-2 @error('name') is-invalid @enderror" 
                                type="text" 
                                value="{{ old('name') }}"
                                placeholder="Full Name" 
                                autocomplete="name" 
                            />

                            @error('name')
                                <span class="invalid-feedback text-left pb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Username -->
                        <div class="form-group m-0">
                            <input 
                                name="username"
                                class="form-control mb-2 @error('username') is-invalid @enderror" 
                                type="text" 
                                value="{{ old('username') }}"
                                placeholder="Username" 
                                autocomplete="username" 
                            />

                            @error('username')
                                <span class="invalid-feedback text-left pb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group m-0">
                            <input 
                                name="password"
                                class="form-control mb-2 @error('password') is-invalid @enderror" 
                                type="password" 
                                placeholder="Password" 
                            />

                            @error('password')
                                <span class="invalid-feedback text-left pb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                         <div class="form-group m-0">
                            <input
                                name="password_confirmation" 
                                class="form-control mb-2"
                                type="password" 
                                placeholder="Confirm Password"
                            />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary form-control mt-2" type="submit">Sign Up</button>
                        </div>
                        <div class="text-secondary">
                            By signing up, you agree to our Terms , Data Policy and Cookies Policy.
                        </div>
                    </div>
                </form>
            </div>

            <div class="card rounded-0 mt-2">
                <div class="text-center p-4">
                    Have an account? <a href="/login">Login</a>
                </div>
            </div>

        <!-- <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
            
        </div>
    </div>
</div>
@endsection
