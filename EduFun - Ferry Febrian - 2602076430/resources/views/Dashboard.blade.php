@extends('layout.master')

@section('content')
    <div class="d-flex justify-content-center align-items-center overflow-hidden" style="height: 400px; width: 100%;">
        <img src="{{ asset('jumbotron.jpg') }}" class="img-fluid w-100">
    </div>
    @foreach ($courses as $c)
        <div class="card">
            <div class="card-body d-flex flex-row">
                {{-- <img src="{{ $c->image }}" class="img-thumbnail"> --}}
                <div class="p-2">
                    <img src="{{ asset($c->image) }}" class="rounded-3" style="max-width: 300px">
                </div>
                <div class="p-2 w-100">
                    <div class="">
                        <h5 class="card-title">{{ $c->name }}</h5>
                        <p class="card-text">{{ $c->date }} | by {{ $c->writer->name }}</p>
                        <p class="card-text">{{ $c->description }}</p>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-dark text-white" href="{{ route('detailPage', ['course_id' => $c->id]) }}">Read
                            More</a>
                    </div>

                </div>

            </div>
        </div>
    @endforeach
@endsection
