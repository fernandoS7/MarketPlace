@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del producto</div>
                    <div class="card-body">
                        <h4>Articulo: <small>{{ $sql->article->name }}</small></h4>
                        <h4>Nombre: <small>{{ $sql->name }}</small></h4>
                        <h4>Descripcion: <small>{{ $sql->description }}</small></h4>
                        <h4>Precio: <small>{{ $sql->quantity }}</small></h4>
                        <h4>Cantidad: <small>{{ $sql->price }}</small></h4>
                        <h4>Foto: <small><img src="{{ $sql->photo }}" alt="{{ $sql->name }}" width="300"></small></h4>
                        <a href="/product" class="btn btn-outline-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
