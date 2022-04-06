@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p>
                <hr>
                <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-outline-primary">Edit Post</a>
            </div>
        </div>
    </div>
@endsection
