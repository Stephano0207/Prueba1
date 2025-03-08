<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    //Validaciones que se aplicaran
    public function rules(): array
    {
        return [
           "title"=>["required","min:5","max:255"],
            "slug"=>["required","unique:posts,slug"],
            "content"=>"required",
            "categoria"=>"required",
        ];
    }

    //Mensajes que se mostrara en caso no se cumplan las validaciones
    public function messages(){
        return [
            "title.required"=>"Ingrese el :attribute del post",
            "slug.required"=>"Ingrese el slug",
            "slug.unique"=>"Slug r epetido ingrese otro slug",
            "content.required"=>"Ingrese el contenido del post",
            "categoria.required"=>"Ingrese la categoria del post",
        ];
    }


    // Cambiar solo el nombre por defecto de ciertas variables
    // en caso ocurra una validacion
    public function attributes()
    {
        return [
            "title"=>"name"
        ];
    }
}
