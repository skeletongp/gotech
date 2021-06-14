@extends('adminlte::page')

{{-- Título de la página --}}
@section('title')
{{$title}}
@stop

{{-- Encabezado --}}
@section('content_header')
  <h1 class="uppercase font-bold ml-2 p-3 text-center">
   {{$header}}
  </h1>
@livewireStyles

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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{$css}}
@stop

{{-- Sección de scripts --}}
@section('js')

@stack('modals')

   @livewireScripts
{{$js}}
@stop