<h1>Aquí vamos a administrar las reservas</h1>

@extends('adminlte::page')

@section('title', 'Reservas')

@section('content_header')
    <h2 class="text-center"><b>Clientes</b></h2>
@stop

@section('content')
    <div class="card-body">
        <table class="table table-striped table-sa">
            <thead>
                <tr>
                    <th>Dni cliente</th>
                    <th>Nom i cognoms</th>
                    <th>Edat</th>
                    <th>Telèfon</th>
                    <th>Adreça</th>
                    <th>Ciutat</th>
                    <th>País</th>
                    <th>Email</th>
                    <th>Tipus de targeta</th>
                    <th>Número de la targeta</th>
                    <th class="text-center" colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>12345678A</td>
                    <td>John Doe</td>
                    <td>35</td>
                    <td>123456789</td>
                    <td>Calle Principal 123</td>
                    <td>Barcelona</td>
                    <td>España</td>
                    <td>john@example.com</td>
                    <td>Crèdit</td>
                    <td>1234 5678 9012 3456</td>
                    <td width="5px">
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                    <td width="5px">
                        <form action="#" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>87654321B</td>
                    <td>Jane Smith</td>
                    <td>28</td>
                    <td>987654321</td>
                    <td>Avenida Central 456</td>
                    <td>Madrid</td>
                    <td>España</td>
                    <td>jane@example.com</td>
                    <td>Dèbit</td>
                    <td>9876 5432 1098 7654</td>
                    <td width="5px">
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                    <td width="5px">
                        <form action="#" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>13579246C</td>
                    <td>Michael Johnson</td>
                    <td>45</td>
                    <td>456123789</td>
                    <td>Plaza Mayor 789</td>
                    <td>Valencia</td>
                    <td>España</td>
                    <td>michael@example.com</td>
                    <td>Crèdit</td>
                    <td>4567 8901 2345 6789</td>
                    <td width="5px">
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                    <td width="5px">
                        <form action="#" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>98765432X</td>
                    <td>María García</td>
                    <td>30</td>
                    <td>654789321</td>
                    <td>Calle Alameda 456</td>
                    <td>Sevilla</td>
                    <td>España</td>
                    <td>maria@example.com</td>
                    <td>Dèbit</td>
                    <td>6543 2109 8765 4321</td>
                    <td width="5px">
                        <a href="#" class="btn btn-primary btn-sm mb-2">Editar</a>
                    </td>
                    <td width="5px">
                        <form action="#" method="POST">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
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
