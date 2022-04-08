<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resource') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row m-2">
                    <div class="col-8">
                    </div>
                    <div class="col-4 text-end">
                        <a href="{{ route('admin.resource.create') }}" class="btn btn-primary btn-sm">Add a Resource</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>

                            <tbody>

                            @forelse($resources as $resource)

                                <tr>
                                    <th scope="row">{{ $resource->id }}</th>
                                    <td>{{ $resource->name }}</td>
                                    <td>{{ $resource->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.resource.show', $resource->id) }}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('admin.resource.edit', $resource->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="100%">
                                        <p class="text-warning">No Resources available.</p>
                                    </td>
                                </tr>

                            @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

