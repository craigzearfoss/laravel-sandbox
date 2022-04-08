<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($role->name)) }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row m-2">
            <div class="col-12 pt-2">
                <div class="row m-2">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.role.index') }}" class="btn btn-primary btn-sm">Go back</a>
                    </div>
                </div>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>{{ $role->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $role->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $role->description }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $role->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $role->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>


                <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-outline-primary">Edit Role</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Role</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
