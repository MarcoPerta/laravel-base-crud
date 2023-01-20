@extends('layouts.app')
@section('title-page')
@section('main-content')
<h1>La lista dei fumetti</h1>

@if ( session('success') )
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div>
    <a href="{{route('comics.create')}}">Creare fumetto</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $elem)
            <tr>
                <td>{{$elem->id}}</td>
                <td>
                    <a href="{{route('comics.show', $elem->id )}}">
                        {{$elem->title}}
                    </a>
                </td>
                <td>{!!$elem->description!!}</td>
                <td>{{$elem->price}}</td>
                <td>{{$elem->series}}</td>
                <td>{{$elem->type}}</td>
                <td>
                    <form action="{{route('comics.destroy', $elem->id)}}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-dark" type="submit">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </form>

                    {{-- <div>
                        <a href="{{route('pastas.edit', $elem->id)}}">
                             <i class="fa-solid fa-pen"></i>
                        </a>
                    </div> --}}
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
{{ $comics->links() }}
@endsection