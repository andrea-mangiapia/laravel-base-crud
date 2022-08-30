@extends('layouts.app')

@section('main_content')
<main>
    <h1>
        {{$comic->title}}
    </h1>

    <div>
        <div>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div>
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
            </div>
        </div>
        <div>
            
            <div>
                <div>
                    <strong>Descrizione:</strong> {{$comic->description}}
                </div>
            </div>
        </div>
        

    </div>



</main>    
@endsection