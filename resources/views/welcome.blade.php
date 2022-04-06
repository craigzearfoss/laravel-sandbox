@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="/blog" class="btn btn-outline-primary">Show Blog</a>
                <br>
                <a href="/login" class="btn btn-outline-primary mt-4">Login</a>
            </div>
        </div>
    </div>
@endsection
