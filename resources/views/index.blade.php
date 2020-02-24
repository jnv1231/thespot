@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                    <a class="btn btn-success" href="{{ route('products.create') }}">Add Product</a><br><br>
                    <table class="table table-boredered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $prod)
                            <tr>
                                <td>{{$prod->prod_name}}</td>
                                <td>{{$prod->prod_qty}}</td>
                                <td>{{$prod->prod_price}}</td>
                                    <td><a href="{{route('products.edit', $prod->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('products.destroy', $prod->id)}}" class="btn btn-danger">Delete</a></td>
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