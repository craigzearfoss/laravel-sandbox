<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($post->title)) }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row m-2">
            <div class="col-12 pt-2">
                <div class="row m-2">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-primary btn-sm">Go back</a>
                    </div>
                </div>

                <p>{!! $post->body !!}</p>

                <hr>

                <div class="row m-2">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit Post</a>

                        <form id="delete-frm" class="d-inline" action="" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Delete Post</button>
                        </form>
                    </div>
                </div>

                <br><br>
            </div>
        </div>
    </div>

</x-app-layout>
