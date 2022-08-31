@extends('layouts.app')

@section('main_content')
<main>
    <h1>
        Crea il tuo nuovo fumetto
    </h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        
        <div>
            <label for="title">Titolo del fumetto</label>
            <input type="text" id="title" name="title">
        </div>
        <br>
        <div>
            <label for="thumb">Immagine copertina</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>
        <br>
        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type">
        </div>
        <br>
        <div>
            <label for="sale_date">Data di pubblicazione</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" cols="30" rows="10"></textarea>
        </div>
        <br>

        <input type="submit" value='Salva'>

    </form>
</main>
    
@endsection
