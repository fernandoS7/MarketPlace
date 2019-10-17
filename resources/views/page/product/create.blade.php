@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Crear producto</div>
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

                        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="article_id">Articulo:</label>
                                <select name="article_id" id="article_id" class="form-control">
                                    @foreach($articles as $val)
                                        <option value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="name">Descripción:</label>
                                <input type="text" class="form-control" name="description" />
                            </div>
                            <div class="form-group">
                                <label for="name">Cantidad:</label>
                                <input type="text" class="form-control" name="quantity" />
                            </div>
                            <div class="form-group">
                                <label for="name">Precio:</label>
                                <input type="text" class="form-control" name="price" />
                            </div>
                            <div class="form-group">
                                <label for="image">Imagen:</label>
                                <input type="file" name="image" />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            <a href="/product" class="btn btn-outline-dark">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
