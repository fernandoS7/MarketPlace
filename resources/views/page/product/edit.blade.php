@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del producto</div>
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

                        <form method="post" action="{{ route('product.update', $sql->id) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="article_id">Articulo:</label>
                                <select name="article_id" id="article_id" class="form-control">
                                    @foreach($articles as $val)
                                        <option @if($val->name == $sql->article->name) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" value="{{ $sql->name }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Descripción:</label>
                                <input type="text" class="form-control" name="description" value="{{ $sql->description }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Cantidad:</label>
                                <input type="text" class="form-control" name="quantity" value="{{ $sql->quantity }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Precio:</label>
                                <input type="text" class="form-control" name="price" value="{{ $sql->price }}" />
                            </div>
                            <div class="form-group">
                                <label for="name">Imagen:</label>
                                <input type="file" name="photo" />
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                            <a href="/product" class="btn btn-outline-dark">Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
