@extends('layouts.admin')

@section('content')
    <div class="container">
        <table class="table table-hover table-borderless mt-3">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.projects.restore', $project->id) }}" class="btn btn-sm btn-success">
                            Restore
                        </a>
                        <form action="{{ route('admin.projects.force-delete', $project->id) }}" method="POST" class="d-inline-block form-deleter" data-element-name="{{ $project->title }}">
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

@section('scripts')
    @vite('resources/js/deleteHandler.js')
@endsection