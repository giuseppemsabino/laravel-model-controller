@extends('layouts.master')
@section('content')

<div class="container my-3">
    <section class="mb-5 gap-3 row">
        

        @foreach ($movies as $movie)
            <div class="card  col-3 movie-card">
                <div class="card-body">

                    <h4>{{$movie->title}}</h4>
                    <p><strong>({{$movie->original_title}})</strong></p>
                    <p><strong>Data di uscita:</strong> {{$movie->date}}</p>
                </div>
                <div class="card-footer bg-primary text-white">
                    <p><strong>Voto:</strong> {{$movie->vote}}</p>
                </div>

            </div>
        @endforeach

    </section>

</div>
@endsection