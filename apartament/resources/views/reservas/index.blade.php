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

            <tbody>
                <tr>
                <td>12345678A</td>
                <td>AP102</td>
                <td>2024-05-20</td>
                <td>14:00</td>
                <td>2024-05-25</td>
                <td>Recepción</td>
                <td>$100</td>
                <td>Si</td>
                <td>Franquicia hasta 1000 Euros</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>87654321B</td>
                    <td>AP205</td>
                    <td>2024-06-10</td>
                    <td>12:00</td>
                    <td>2024-06-20</td>
                    <td>Oficina del administrador</td>
                    <td>$120</td>
                    <td>Sí</td>
                    <td>Sin franquicia</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>98765432C</td>
                    <td>AP306</td>
                    <td>2024-07-05</td>
                    <td>15:00</td>
                    <td>2024-07-15</td>
                    <td>Recepción principal</td>
                    <td>$90</td>
                    <td>No</td>
                    <td>Franquicia hasta 500 Euros</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>23456789D</td>
                    <td>AP401</td>
                    <td>2024-08-15</td>
                    <td>13:30</td>
                    <td>2024-08-25</td>
                    <td>Oficina de servicio al cliente</td>
                    <td>$150</td>
                    <td>Sí</td>
                    <td>Franquicia hasta 1000 Euros</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                </tr>
            </tbody>
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