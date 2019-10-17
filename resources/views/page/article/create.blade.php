@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos de la categoria</div>
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

                        <form method="post" action="{{ route('article.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            <a href="/article" class="btn btn-outline-dark">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
