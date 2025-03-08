@extends('layout.app')
@section('title')
    Formulario de post
@endsection
@section('content')
    <h1>Formulario </h1>

    {{-- {{__('Client Closed Request 2')}} --}}
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
        <label for="">Titulo <input type="text" name="title" value="{{old("title")}}"></label><br>
        @error('title')
            {{ $message }}
        @enderror
        <br>
        <label for="">Slug <input type="text" name="slug" value="{{old("slug")}}"></label><br>
        @error('slug')
            {{ $message }}
        @enderror
        <br>
        <label for="">Categoria <input type="text" name="categoria" value="{{old("categoria")}}"></label><br>
        @error('categoria')
            {{ $message }}
        @enderror
        <br>
        <label for="">Contenido
            <textarea name="content" id="">{{old("content")}}</textarea>
        </label>
        <br>
        @error('content')
            {{ $message }}
        @enderror
        <br>

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
