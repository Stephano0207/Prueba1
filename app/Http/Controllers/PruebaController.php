<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{

    public function index(){
        return view("pruebas.index");

    }

    public function create(){
       return view("pruebas.create");
    }

    public function store(){
        return "Guardando una prueba";
    }
    public function show($post){
        return view("pruebas.show",compact('post'));
    }
    // public function GetPrueba(){
    //     return "Hola, accediste a la peticion prueba mediante la peticion GET";
    // }

    // public function GetPruebaParametro($id){
    //     return "Hola accediste a la prueba {$id}";

    // }

    // public function GetPruebaMulParametro($id,$tipo_prueba){
    //     if ($tipo_prueba==null) {
    //         return "Hola estas en la prueba $id";
    //     }
    //     return "Hola estas en la prueba $id y el tipo de prueba es $tipo_prueba";
    // }
}
