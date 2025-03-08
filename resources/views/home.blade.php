@extends('layout.app')
@push("css")
<style>
    body{
        background: green
    }
</style>
@endpush
@section('title')
    Home
@endsection

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Titulo de alerta!
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Hola Mundo</p>
    </div>
@endsection
