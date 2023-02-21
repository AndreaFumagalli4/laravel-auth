@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-hover table-borderless mt-5">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">used_language</th>
                    <th scope="col">
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-info">
                            Create a new project
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->used_language }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-primary">
                            Show
                        </a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-success">
                            Edit
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection