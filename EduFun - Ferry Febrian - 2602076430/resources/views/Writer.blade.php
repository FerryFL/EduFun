@extends('layout.master')

@section('content')
    <h2>Our Writers</h2>
    <div class="d-flex justify-content-around p-5">
        @foreach ($writers as $w)
            <div>
                <a href="{{ route('writerDetailPage', ['writer_id' => $w->id]) }}"><img src="{{ asset($w->image) }}"
                        style="max-width: 300px" class="rounded-pill"></a>
                <h5 class="text-center">{{ $w->name }}
                </h5>
            </div>
        @endforeach
    </div>
@endsection
