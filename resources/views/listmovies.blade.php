@extends('layouts.app')


@section('content')
    <div class="container pt-5">
        <div class="row row-cols-4 g-3">
            @foreach ($movies as $movie)
                @include('partials._movie_card')
            @endforeach
        </div>
    </div>
@endsection