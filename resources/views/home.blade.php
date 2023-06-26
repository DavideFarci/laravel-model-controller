@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        @include('partials.card')
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
