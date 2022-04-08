<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(ucfirst($resource->name)) }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row m-2">
            <div class="col-12 pt-2">
                <div class="row m-2">
                    <div class="col-12 text-end">
                        <a href="{{ route('admin.resource.index') }}" class="btn btn-primary btn-sm">Go back</a>
                    </div>
                </div>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>id</th>
                            <td>{{ $resource->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $resource->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $resource->description }}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $resource->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $resource->updated_at }}</td>
                        </tr>
                    </tbody>
                </table>


                <a href="{{ route('admin.resource.edit', $resource->id) }}" class="btn btn-outline-primary">Edit Resource</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Resource</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
