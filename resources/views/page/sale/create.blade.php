@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Crear venta</div>
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

                        <form method="post" action="{{ route('sale.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name">Descipcion:</label>
                                        <input type="text" class="form-control" name="description" />
                                    </div>
                                </div>
                            </div>
                            <div class="a_clone" id="a_clone">
                                <div class="row" >
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="article_id">Articulo:</label>
                                            <select name="product_id[]" id="product_id" class="form-control">
                                                @foreach($products as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Cantidad:</label>
                                            <input type="text" class="form-control" name="quantity[]" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Precio:</label>
                                            <input type="text" class="form-control" name="price[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="article_id">Articulo:</label>
                                            <select name="product_id[]" id="product_id" class="form-control">
                                                @foreach($products as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Cantidad:</label>
                                            <input type="text" class="form-control" name="quantity[]" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Precio:</label>
                                            <input type="text" class="form-control" name="price[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="article_id">Articulo:</label>
                                            <select name="product_id[]" id="product_id" class="form-control">
                                                @foreach($products as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Cantidad:</label>
                                            <input type="text" class="form-control" name="quantity[]" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Precio:</label>
                                            <input type="text" class="form-control" name="price[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="article_id">Articulo:</label>
                                            <select name="product_id[]" id="product_id" class="form-control">
                                                @foreach($products as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Cantidad:</label>
                                            <input type="text" class="form-control" name="quantity[]" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Precio:</label>
                                            <input type="text" class="form-control" name="price[]" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="article_id">Articulo:</label>
                                            <select name="product_id[]" id="product_id" class="form-control">
                                                @foreach($products as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Cantidad:</label>
                                            <input type="text" class="form-control" name="quantity[]" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">Precio:</label>
                                            <input type="text" class="form-control" name="price[]" />
                                        </div>
                                    </div>
                                </div>
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
