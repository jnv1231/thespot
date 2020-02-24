@extends('layouts.app')

@section('content')
<div class="row-content-center">
    
    <div class="col-md-12">
    <a class="btn btn-success" href="{{ route('products.index') }}">Back to Products</a>
        <div class="card">
            <div class="card-header"><strong>Add New Products</strong></div>
            <div class="card-body">
        
            <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="col-md-5">
                        <div class="form-group">
                            Product Name:
                            <input type="text" name="prod_name" class="form-control">
                            Product Quantity:
                            <input type="text" name="prod_qty" class="form-control">
                            Product Price:
                            <input type="text" name="prod_price" class="form-control">
                            <button class="btn btn-primary" type="Submit">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection