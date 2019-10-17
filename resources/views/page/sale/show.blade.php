@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Datos del producto</div>
                    <div class="card-body">
                        <h4>Vendedor: <small>{{ $sql->user->name }}</small></h4>
                        <h4>Descripcion: <small>{{ $sql->description }}</small></h4>
                        <h4>Total venta: <small>{{ $sql->total_amount }}</small></h4>
                        <h4>Fecha venta: <small>{{ $sql->date }}</small></h4>

                        <table class="table table-bordered">
                            <tr>
                                <td>product_sale</td>
                                <td>quantity</td>
                                <td>price</td>
                                <td>Total</td>
                            </tr>
                            @foreach($sql->productSales as $productSale)
                                <tr>
                                    <td>{{ $productSale->product->name }} - {{ $productSale->product->description }}</td>
                                    <td>{{ $productSale->quantity }}</td>
                                    <td>{{ $productSale->price }}</td>
                                    <td>{{ $productSale->quantity*$productSale->price }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><b>Totales</b></td>
                                <td><b>{{ $sql->total_amount }}</b></td>
                            </tr>
                        </table>

                        <a href="/sale" class="btn btn-outline-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
