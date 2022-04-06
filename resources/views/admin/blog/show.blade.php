<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($post->title)) }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <p>{!! $post->body !!}</p>
                <hr>
                <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
