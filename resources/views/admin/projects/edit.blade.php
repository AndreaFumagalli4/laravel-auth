@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('admin.partials.editCreate', ['route' => 'admin.projects.show', 'method' => 'PUT', 'project' => $project])
    </div>
@endsection