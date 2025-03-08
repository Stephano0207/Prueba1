<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
       $posts=
       Post::
       orderBy("id","desc")
       ->paginate(10);

        return view("posts.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $rules=
        // [
        //     "title"=>["required","min:5","max:255"],
        //     "slug"=>["required","unique:posts,slug"],
        //     "content"=>"required",
        //     "categoria"=>"required",
        // ];

        // $messages=
        // [
        //     "title.required"=>"Ingrese el titulo del post",
        //     "slug.required"=>"Ingrese el slug",
        //     "slug.unique"=>"Slug repetido ingrese otro slug",
        //     "content.required"=>"Ingrese el contenido del post",
        //     "categoria.required"=>"Ingrese la categoria del post",
        // ];
        // $request->validate($rules,$messages);

      $post= Post::create($request->all());

       Mail::to("chinchin@unitru.edu.pe")->send(new PostCreatedMail($post));

    //    return redirect("/posts"); Otra manera de dirigirse a una ruta
       return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $post= Post::find($id);
        return view("posts.show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::find($id);

        return view("posts.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $id)
    {
        $rules=
        [
            "title"=>"required",
            "slug"=>"required|unique:posts,slug,$id->id",
            "content"=>"required",
            "categoria"=>"required",

        ];
        $messages=
        [
            "title.required"=>"Ingrese el titulo del post",
            "slug.required"=>"Ingrese el slug",
            "slug.unique"=>"Ingrese otro slug, slug ya existente",
            "content.required"=>"Ingrese el contenido del post",
            "categoria.required"=>"Ingrese la categoria del post",
        ];
        $request->validate($rules,$messages);


        $id->update($request->all());

        // $post= Post::find($id);
        // $post->title=$request->title;
        // $post->slug=$request->slug;

        // $post->content=$request->content;
        // $post->categoria=$request->categoria;
        // $post->save();

        return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $post= Post::find($id);
       $post->delete();
       return redirect()->route("posts.index");
    }
}
