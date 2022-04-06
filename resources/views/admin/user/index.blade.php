<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm">Add a User</a>
                    </div>
                </div>

                <div class="row">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email Verifid At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>

                        <tbody>

                        @forelse($users as $user)

                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->email_verified_at }}</td>
                                <td>
                                    <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="100%">
                                    <p class="text-warning">No blog Posts available</p>
                                </td>
                            </tr>

                        @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

