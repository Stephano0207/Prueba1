@extends("layout.app")
@section("title")
Formulario de post
@endsection
@section("content")
<h1>Formulario  para actualizar post</h1>


<form action="{{route("posts.update",$post->id)}}" method="POST" >
    @csrf
    @method("PUT")
    <label for="">Titulo <input type="text" name="title" value="{{$post->title}}"></label><br>
    @error('title')
    {{ $message }}
@enderror
<br>

    <label for="">Slug <input type="text" name="slug" value="{{$post->slug}}"></label><br>
    @error('slug')
    {{ $message }}
@enderror
<br>
    <label for="">Categoria <input type="text" name="categoria" value="{{$post->categoria}}"></label><br>
    @error('categoria')
    {{ $message }}
@enderror
<br>
    <label for="">Contenido
        <textarea name="content" id="" >{{$post->content}}</textarea>
    </label>

    <br>
    @error('content')
    {{ $message }}
@enderror
<br>



    <button type="submit">Actualizar Post</button>
</form>


@endsection
