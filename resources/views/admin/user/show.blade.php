<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($user->name)) }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('admin.user.index') }}" class="btn btn-outline-primary btn-sm">Go back</a>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Email Verified At</th>
                            <td>{{ $user->email_verified_at }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $user->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>

                <hr>
                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-outline-primary">Edit User</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete User</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
