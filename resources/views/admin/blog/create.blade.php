<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New Post') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">

                <div class="row">
                    <div class="col-8">
                        Fill and submit this form to create a post.
                    </div>
                    <div class="col-4 text-end">
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-primary btn-sm">Go back</a>
                    </div>
                </div>

                <div class="border rounded mt-1 p-2">

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Post Title" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Post Body</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                          rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary btn-sm">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
