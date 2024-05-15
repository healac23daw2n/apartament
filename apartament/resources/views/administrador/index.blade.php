
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="text-center">Panel Administrador</h1>
@stop

@section('content')
    <h5 class="text-center">>Hola!</h5>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop