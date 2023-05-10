@extends('layouts.app')

@section('page-title', 'DC Comics | Collectibles')

@section('content')
    <section id="collectibles" class="container-lg py-5">
        <table class="table border">
            <thead>
                <tr class="text-primary">
                    <th scope="col">Locandina</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr class="text-white">
                        <td>
                            <img src="{{ $movie['thumb'] }}" alt="Foto di {{ $movie['series'] }}">
                        </td>
                        <td>{{ $movie['title'] }}</td>
                        <td>{{ $movie['description'] }}</td>
                        <td>{{ $movie['type'] }}</td>
                        <td>{{ $movie['price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="w-100 text-center">
            <button class="ms_load my-3">LOAD MORE</button>
        </div>

    </section>
@endsection
