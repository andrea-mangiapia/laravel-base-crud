@extends('layouts.app')

@section('main_content')
<main>
    <h1>
        {{$comics->title}}
    </h1>

    <div>
        <div>
            <img src="{{$comics->thumb}}" alt="{{$comics->title}}">
            <div>
                <div>
                    <strong>Serie:</strong> {{$comics->series}}
                </div>
                <div>
                    <strong>Tipo:</strong> {{$comics->type}}
                </div>
                <div>
                    <strong>Titolo:</strong> {{$comics->sale_date}}
                </div>
                <div>
                    <strong>Prezzo:</strong> {{$comics->price}}
                </div>
            </div>
        </div>
        <div>
            
            <div>
                <div>
                    <strong>Descrizione:</strong> {{$comics->description}}
                </div>
            </div>
        </div>
        

    </div>



</main>    
@endsection