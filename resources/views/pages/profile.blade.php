@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-3 p-5">
            <img class="w-100 rounded-circle" src="/storage/default_img/DP1.jpg" alt="Profile Picture">
        </div>
        <div class="col-sm-12 col-md-9 p-5">


            <div class="d-flex justify-content-between align-items-baseline">
            
                <div class="d-flex align-items-center pb-3">
                    <h1>{{ $user->name }}</h1>
                </div>

                <a class="btn btn-primary" href="">Add New Post</a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>127K</strong> Posts</div>
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

        <div class="col-sm-12 col-md-4 py-3">
            <img class="w-100" src="/storage/default_img/PIC1.jpg" alt="My Photos">
        </div>
        <div class="col-sm-12 col-md-4 py-3">
            <img class="w-100" src="/storage/default_img/PIC2.jpg" alt="My Photos">
        </div>
        <div class="col-sm-12 col-md-4 py-3">
            <img class="w-100" src="/storage/default_img/PIC3.jpg" alt="My Photos">
        </div>
        <div class="col-sm-12 col-md-4 py-3">
            <img class="w-100" src="/storage/default_img/PIC4.jpg" alt="My Photos">
        </div>
        <div class="col-sm-12 col-md-4 py-3">
            <img class="w-100" src="/storage/default_img/PIC5.jpg" alt="My Photos">
        </div>

    </div>
</div>
@endsection
