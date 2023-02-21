@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($projects as $project)
        <div class="card text-center mt-3">
            <div class="card-header">
                {{ $project->title }}
            </div>
            <div class="card-body">
                <h2 class="card-title fw-bold">
                    {{ $project->title }}
                </h2>
                <div class="my-4">
                    <img src="{{ $project->thumb }}" alt="{{ $project->title }}" class="img-fluid">
                </div>
                <a href="{{ $project->link }}" class="btn btn-sm btn-info">
                    Go to the project repository
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection