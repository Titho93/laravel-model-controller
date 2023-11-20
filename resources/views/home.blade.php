@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->title }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
