@extends('layouts.app')

@section('main_content')
<main>
    <h1>Elenco fumetti preferiti</h1>

    <div>
        @foreach ($comics as $comic)
            <div>
                <div>
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <div>
                    <h3>{{$comic->title}}</h3>
                </div>
                <div>
                    <strong>Serie:</strong> {{$comic->series}}
                </div>
                <div>
                    <strong>Tipo:</strong> {{$comic->type}}
                </div>
                <div>
                    <strong>Titolo:</strong> {{$comic->sale_date}}
                </div>
                <div>
                    <strong>Prezzo:</strong> {{$comic->price}}
                </div>
                <div>
                    <strong>Descrizione:</strong> {{$comic->description}}
                </div>
                <div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Scopri di più</a>
                </div>
                <div>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
                </div>
            </div>
            <hr>
            <br>
            
        @endforeach
    </div>
</main>    
@endsection