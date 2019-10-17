@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de usuarios
                    </div>
                    <div class="card-body">

                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <br>
                        @endif

                        <a href="/user/create" class="btn btn-outline-dark">Crear Usuario</a>
                            <br><br>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>CI</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->ci }}</td>
                                <td>
                                    <a href="/user/{{ $user->id }}" class="btn btn-outline-info">Info</a>
                                    <a href="/user/{{ $user->id }}/edit" class="btn btn-outline-warning">Editar</a>

                                    <form action="{{ route('user.destroy', $user->id)}}" method="post">
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
