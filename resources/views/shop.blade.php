@extends('layouts.app')

@section('page-title', 'Shop')

@section('content')
    <section id="shop" class="container-lg py-5 d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="ms_box">
                <div class="ms_card">
                    <img src="{{ $movie['thumb'] }}" alt="Foto di {{ $movie['series'] }}">
                    <div class="d-flex justify-content-between pt-3">
                        <h3>{{ $movie['price'] }}</h3>
                        <button class="ms_button">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>
                    <h3>{{ $movie['series'] }}</h3>
                </div>
            </div>
        @endforeach
        <button class="ms_load">LOAD MORE</button>
    </section>
@endsection
