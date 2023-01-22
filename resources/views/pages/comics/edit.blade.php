@extends('layouts.app')
@section('title-page')
@section('main-content')

    <h1 class="text-center">modificare fumetto</h1>

    <form method="POST" action="{{route ('comics.update', $comics->id) }}">

        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id=""></textarea>
        </div>
    
        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="title">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="title">
        </div>
    
        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="title">
        </div>
    
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>

@endsection 