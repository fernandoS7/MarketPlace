@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del cargo</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br />
                        @endif

                        <form method="post" action="{{ route('position.update', $sql->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" value={{ $sql->name }} />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                            <a href="/position" class="btn btn-outline-dark">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
