@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('admin.partials.editCreate', ['route' => 'admin.projects.store', 'method' => 'POST'])
    </div>
@endsection