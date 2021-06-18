@extends('adminlte::page')

{{-- Título de la página --}}
@section('title')
{{$title}}
@stop

{{-- Encabezado --}}
@section('content_header')
  <h1 class="uppercase font-bold ml-2 text-center">
   {{$header}}
  </h1>
@livewireStyles
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@stop

{{-- Contenido principal de la página --}}
@section('content')
   <div class=" m-4 mt-1 p-1">
      {{$slot}}
   </div>
@stop

{{-- Sección de fuentes y estilos --}}
@section('css')
   <!-- Fonts -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.3.5/dist/full.css" rel="stylesheet" type="text/css" />
<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{$css}}
  <style>
     .input-group
     {
        display: flex;
        align-items: center;
     }
     .btn-sidebar{
        border: none;
        background-color: transparent;
     }
    .dropdown-toggle{
       display: flex !important;
    }
     .user-header{
        display: flex;
        flex-flow: column;
        align-items: center;
     }
  </style>
@stop

{{-- Sección de scripts --}}
@section('js')
<script src="{{ mix('js/app.js') }}" defer></script>
@stack('modals')
   @livewireScripts
{{$js}}
@stop