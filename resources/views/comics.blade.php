@extends('layouts.app')

@section('page-title', 'DC Comics | Comics')

@section('content')
    <section id="comics" class="container-lg py-5 d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="ms_box">
                <div class="ms_card">
                    <img src="{{ $movie['thumb'] }}" alt="Foto di {{ $movie['series'] }}">
                    <h3>{{ $movie['series'] }}</h3>
                </div>
            </div>
        @endforeach
        <button>LOAD MORE</button>
    </section>
@endsection
