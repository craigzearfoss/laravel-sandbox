<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Blog!') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row m-2">
                    <div class="col-8">
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4 text-end">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">Add a Post</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        <div class="list-group">

                            @forelse($posts as $post)

                                <a href="{{ route('admin.blog.show', $post->id) }}" class="list-group-item list-group-item-action">{{ ucfirst($post->title) }}</a>

                            @empty

                                <p class="text-warning">No blog Posts available.</p>

                            @endforelse
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

