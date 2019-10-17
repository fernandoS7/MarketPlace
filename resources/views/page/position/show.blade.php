@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del cargo</div>
                    <div class="card-body">
                        <h4>Nombre: <small>{{ $sql->name }}</small></h4>
                        <a href="/position" class="btn btn-outline-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
