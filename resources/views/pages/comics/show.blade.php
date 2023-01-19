@extends('layouts.app')
@section('title-page')
@section('main-content')
<h1>Singolo fumetto</h1>

    <h1 class="text-center">{{$elem->title}}</h1>
    <div>
        <p>
            {{$elem->description}}
        </p>
    </div>

@endsection