@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Cargos
                    </div>
                    <div class="card-body">

                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <br>
                        @endif

                        <a href="/position/create" class="btn btn-outline-dark">Crear Cargo</a>
                            <br><br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sql as $val)
                            <tr>
                                <td>{{ $val->name }}</td>
                                <td>
                                    <a href="/position/{{ $val->id }}" class="btn btn-outline-info">Info</a>
                                    <a href="/position/{{ $val->id }}/edit" class="btn btn-outline-warning">Editar</a>

                                    <form action="{{ route('position.destroy', $val->id)}}" method="post">
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
