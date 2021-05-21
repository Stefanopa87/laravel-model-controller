@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="bg-danger">DETTAGLI SINGOLO FILM: </h1>
            <br>                       
            <h3> FILM NUMERO: [{{ $movies -> id }}] </h3>
            <br>
            <h3> TITOLO ORIGINALE: {{ $movies -> original_title }} </h3>
            <br>
            <h3> NAZIONALITA': {{ $movies -> nationality }} </h3>
            <br>
            <h3> VOTO: {{ $movies -> vote }} </h3>
            <br>
            <hr>
            <a class="btn btn-primary mb-3" href="/" role="button">HOME</a>
        </div>
    </div>
</div>
 
 @endsection