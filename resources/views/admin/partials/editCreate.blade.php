@extends('layouts.admin')

@section('content')
    <div class="container">
        <form class="mt-3" action="{{ route($route, $project->id) }}" method="POST">
            @csrf
            @method($method)

            @if ($errors->any())
                <div id="popup_message" class="d-none" data-type="warning" data-message="Check errors"></div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        {{ $title }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $project->title }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="thumb">
                            Thumb
                        </label>
                        <textarea class="form-control @error('thumb') is-invalid @enderror" name="thumb">{{ old('thumb') ?? $project->thumb }}</textarea>
                        @error('thumb')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="used_language">
                            Used Language
                        </label>
                        <input type="text" class="form-control @error('used_language') is-invalid @enderror" name="used_language" value="{{ old('used_language') ?? $project->used_language }}">
                        @error('used_language')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="link">
                            Link
                        </label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') ?? $project->link }}">
                        @error('link')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="project_date">
                            Date
                        </label>
                        <input type="date" class="form-control @error('project_date') is-invalid @enderror" name="project_date" value="{{ old('project_date') ?? $project->project_date }}">
                        @error('project_date')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
        
                    </div>
                </div>
            </div>
        </form>
@endsection