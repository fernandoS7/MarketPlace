@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Productos
                    </div>
                    <div class="card-body">

                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <br>
                        @endif

                        <a href="/product/create" class="btn btn-outline-dark">Crear producto</a>
                            <br><br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Articulo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sql as $val)
                            <tr>
                                <td><img src="{{ $val->photo }}" width="70"></td>
                                <td>{{ $val->article->name }} </td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->description }}</td>
                                <td>{{ $val->quantity }}</td>
                                <td>{{ $val->price }}</td>
                                <td>
                                    <a href="/product/{{ $val->id }}" class="btn btn-outline-info">Info</a>
                                    <a href="/product/{{ $val->id }}/edit" class="btn btn-outline-warning">Editar</a>
                                    <form action="{{ route('product.destroy', $val->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
