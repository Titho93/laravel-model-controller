@extends('layouts.main')

@section('content')
    <h1>Movies</h1>

    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie)
            <div class="card m-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <a href="{{ route('detail', ['id' => $movie->id]) }}" class="btn btn-primary">Dettaglio</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
