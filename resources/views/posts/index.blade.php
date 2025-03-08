@extends("layout.app")
@section("title")
Inicio de posts
@endsection
@section("content")
<h1 class="text-2xl">Aqui estan todos los post</h1>
<a href="{{route('posts.create')}}">Crear Nuevo post</a>

<ul>
    @foreach ($posts as $p)

    <li>
        <a href="{{route("posts.show",$p->id)}}">
            {{$p->title}}
        </a>
    </li>

    @endforeach
</ul>

{{$posts->links()}}


@endsection
