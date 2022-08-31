@extends('layouts.app')

@section('main_content')
<main>
    <h1>Modifica il prodotto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="post">
        @csrf

        @method('PUT')
        
        <div>
            <label for="title">Titolo del fumetto</label>
            <input type="text" id="title" value="{{ old('title') ? old('title') : $comics->title }}" name="title" class="@error('title') is-invalid @enderror">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="thumb">Immagine copertina</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comics->thumb }}">
        </div>
        <br>
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{ old('series') ? old('series') : $comics->series }}">
        </div>
        <br>
        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" value="{{ old('type') ? old('type') : $comics->type }}">
        </div>
        <br>
        <div>
            <label for="sale_date">Data di pubblicazione</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comics->sale_date }}">
        </div>
        <br>
        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{ old('price') ? old('price') : $comics->price }}">
        </div>
        <br>
        <div>
            <label for="description">Descrizione</label>
            <textarea id="description" name="description" cols="30" rows="10">{{ old('description') ? old('description') : $comics->description }}</textarea>
        </div>
        <br>

        <input type="submit" value='Salva'>

    </form>
</main>   
@endsection