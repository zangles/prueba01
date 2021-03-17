@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alta Empleado</div>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <p>Por favor corrige los errores:</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('empleados.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="id_legajo">Id Legajo</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp" name="id_legajo" id="id_legajo" value="{{old('id_legajo')}}" >
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="apellido" id="apellido"  value="{{old('apellido')}}">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="nombre" id="nombre" value="{{old('nombre')}}">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="direccion" id="direccion" value="{{old('direccion')}}">
                        </div>
                        <div class="form-group">
                            <label for="localidad">Localidad</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="localidad" id="localidad" value="{{old('localidad')}}">
                        </div>
                        <div class="form-group">
                            <label for="id_tipo_documento">Tipo Documento</label>
                            <select class="form-control" id="id_tipo_documento" name="id_tipo_documento">
                                @foreach ($documentos as $document)
                                    <option value="{{ $document->id_tipo_documento }}">{{ $document->tipo_documento }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nro_documento">Nro Documento</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="nro_documento" id="nro_documento" value="{{old('nro_documento')}}">
                        </div>
                        <div class="form-group">
                            <label for="codigo_postal">Codigo Postal</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name="codigo_postal" id="codigo_postal" value="{{old('codigo_postal')}}">
                        </div>
                        <div class="form-group">
                            <label for="id_provincia">Provincia</label>
                            <select class="form-control" id="id_provincia" name="id_provincia">
                                @foreach ($provincias as $provincia)
                                    <option value="{{ $provincia->id_provincia }}">{{ $provincia->provincia }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Alta</button>
                        <a href="{{ route('empleados.index') }}" class="btn btn-danger">Salir</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
