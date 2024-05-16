<h1>Aquí vamos a administrar las reservas</h1>


@extends('adminlte::page')

@section('title', 'Reservas')

@section('content_header')
    <h2 class="text-center"><b>Reserva tu apartamento</b></h2>
@stop

@section('content')
    <div class="card-body">
        <table class="table table-striped table-sa">
            <thead>
                <tr>
                    <th>Dni cliente</th>
                    <th>Codigo unico del apartamento</th>
                    <th>Data de inicio de la reserva</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Devoolución de las llaves lugar</th>
                    <th>Precio por día</th>
                    <th>Dipósito</th>
                    <th>Tipo de aseguranza</th>
                </tr>
            </thead>
        </table>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop