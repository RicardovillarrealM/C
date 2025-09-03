@extends('layouts.app')
@section('title')
    Laravel 12
@endsection
@section('content')
@push('css')
<style>
    body {
        background-color: #f0f4f8;
    }
</style>
@endpush

@push('css')
<style>
    body {
        color:red; 
    }
</style>
@endpush

        <div class="max-w-2xl mx-auto px-4">
         <h1>Bienvenido a la pagina principal de Laravel 11</h1>
        </div>

        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                Titulo de la alerta:
            </x-slot>
            Contenido de la alerta
        </x-alert2>
        <p>
            Este es un parrafo de texto que sigue a la alerta.
        </p>   


@endsection

