@extends("layout.app")
@section("title")
Post
@endsection
@section("content")

<a href="{{route("posts.index")}}">Volver a Posts</a>


<h1>{{$post->title}}</h1>
<p>
    <b>Categoria: {{$post->categoria}}</b>
</p>
<p>

    {{$post->content}}
</p>

<a href="{{route('posts.edit',$post->id)}}">Editar</a>

<form action="{{route("posts.destroy",$post->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button>Eliminar post</button>
</form>
@endsection
