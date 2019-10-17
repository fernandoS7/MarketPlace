@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del usuario</div>
                    <div class="card-body">
                        <h4>Cargo: <small>{{ $user->position->name }}</small></h4>
                        <h4>Nombre: <small>{{ $user->name }}</small></h4>
                        <h4>Email: <small>{{ $user->email }}</small></h4>
                        <h4>Telefono: <small>{{ $user->phone }}</small></h4>
                        <h4>CI: <small>{{ $user->ci }}</small></h4>
                        <a href="/user" class="btn btn-outline-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
