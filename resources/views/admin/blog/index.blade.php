<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Blog!') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">Add a Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="{{ route('admin.blog.show', $post->id) }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

