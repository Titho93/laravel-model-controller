@extends('layouts.main')

@section('content')
    <h1>Movies</h1>

    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            <div class="card m-5 bg-warning" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <a href="{{ route('detail', ['id' => $movie->id]) }}" class="btn btn-danger">Details</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
