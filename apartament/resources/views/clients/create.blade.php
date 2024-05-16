<h1>Aquí vamos a administrar las reservas</h1>

@extends('adminlte::page')

@section('title', 'Crear clientes')

@section('content_header')
    <h2 class="text-center"><b>Agregar nuevos Clientes</b></h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="#">
                @csrf

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="name" > Nombre del cliente</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                        @error('name')
                        <span class="text-danger">
                            <span>*{{ message }}</span>
                        </span>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>    
@stop