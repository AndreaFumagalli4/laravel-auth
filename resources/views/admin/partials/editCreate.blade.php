@extends('layouts.admin')

@section('content')
    <div class="container">
        <form class="mt-3" action="{{ route($route, $project->id) }}" method="POST">
            @csrf
            @method($method)

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label class="form-label" for="title">
                    Title
                </label>
                <input type="text" class="form-control" name="title" value="{{ old('title') ?? $project->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="thumb">
                    Thumb
                </label>
                <textarea class="form-control" name="thumb">{{ old('thumb') ?? $project->thumb }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="used_language">
                    Used Language
                </label>
                <input type="text" class="form-control" name="used_language" value="{{ old('used_language') ?? $project->used_language }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="link">
                    Link
                </label>
                <input type="text" class="form-control" name="link" value="{{ old('link') ?? $project->link }}">
            </div>
            
            <button type="submit" class="btn btn-primary">
                Submit
            </button>

            </div>
        </form>
@endsection