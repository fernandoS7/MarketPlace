@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del usuario</div>
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

                        <form method="post" action="{{ route('user.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="position_id">Cargo:</label>
                                <select name="position_id" id="position_id" class="form-control">
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" />
                            </div>

                            <div class="form-group">
                                <label for="email">Contraseña:</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" >Confirmar Contraseña:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefono:</label>
                                <input type="text" class="form-control" name="phone" />
                            </div>
                            <div class="form-group">
                                <label for="ci">CI:</label>
                                <input type="text" class="form-control" name="ci" />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            <a href="/user" class="btn btn-outline-dark">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
