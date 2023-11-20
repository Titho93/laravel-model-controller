@extends('layouts.main')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <div class="container">
        <div class="card bg-warning" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><strong>Title:</strong> {{ $movie->original_title }}</p>
                <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
            </div>
        </div>
    @endsection
