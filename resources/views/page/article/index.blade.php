@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de categoria
                    </div>
                    <div class="card-body">

                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <br>
                        @endif

                        <a href="/article/create" class="btn btn-outline-dark">Crear categoria</a>
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
                                    <a href="/article/{{ $val->id }}" class="btn btn-outline-info">Info</a>
                                    <a href="/article/{{ $val->id }}/edit" class="btn btn-outline-warning">Editar</a>

                                    <form action="{{ route('article.destroy', $val->id)}}" method="post">
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
