<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New User') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <p>Fill and submit this form to create a user</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Enter User Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email"
                                       placeholder="Enter User Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                       placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
