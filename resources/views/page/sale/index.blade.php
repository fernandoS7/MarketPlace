@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Ventas
                    </div>
                    <div class="card-body">

                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <br>
                        @endif

                        <a href="/sale/create" class="btn btn-outline-dark">Crear venta</a>
                            <br><br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Usuario Encargado</th>
                                <th>Total Venta</th>
                                <th>Descripcion</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sql as $val)
                            <tr>
                                <td>{{ $val->date }}</td>
                                <td>{{ $val->user->name }} </td>
                                <td>{{ $val->total_amount }}</td>
                                <td>{{ $val->description }}</td>
                                <td>
                                    <a href="/sale/{{ $val->id }}" class="btn btn-outline-info">Info</a>
                                    <a href="/sale/{{ $val->id }}/edit" class="btn btn-outline-warning">Editar</a>
                                    <form action="{{ route('sale.destroy', $val->id)}}" method="post">
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
