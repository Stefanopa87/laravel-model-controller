@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">

            <h1 class="bg-success"> TUTTI I FILM:</h1>

            <ul style="list-style: none">

                @foreach ($movies as $movie)
                <li>
                    <a href="{{route('film', $movie -> id )}}">
                        [{{ $movie -> id }}]
                        {{ $movie -> title }}                       
                    </a>
                </li>                    
                @endforeach

            </ul>
        </div>
    </div>
</div>
 
@endsection