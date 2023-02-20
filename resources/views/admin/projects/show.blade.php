@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
                {{ $project->title }}
            </div>
            <div class="card-body">
                <h2 class="card-title">
                    {{ $project->title }}
                </h2>
                <img src="{{ $project->thumb }}" alt="{{ $project->title }}">
                <br>
                <a href="{{ $project->link }}" class="btn btn-sm btn-info">
                    Go to the project repository
                </a>
            </div>
        </div>
    </div>
@endsection