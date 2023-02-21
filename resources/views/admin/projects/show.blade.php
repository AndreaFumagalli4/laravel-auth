@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card text-center mt-3">
            <div class="card-header">
                {{ $project->title }}
            </div>
            <div class="card-body">
                <h2 class="card-title fw-bold">
                    {{ $project->title }}
                </h2>
                <img src="{{ $project->thumb }}" alt="{{ $project->title }}" class="img-fluid">
                <br>
                <a href="{{ $project->link }}" class="btn btn-sm btn-info mt-3">
                    Go to the project repository
                </a>
            </div>
        </div>
    </div>
@endsection