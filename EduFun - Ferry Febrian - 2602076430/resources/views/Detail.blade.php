@extends('layout.master')

@section('content')
    <h2>{{ $course->category->name }}</h2>
    <div class="card">
        <div class="card-body">
            <div class="p-2">
                <img src="{{ asset($course->image) }}" class="rounded-3 w-50 m-auto">
            </div>
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->date }} | by {{ $course->writer->name }}</p>
            <p class="card-text">{{ $course->description }}</p>
        </div>
    </div>
@endsection
