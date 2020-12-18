@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Products</h2>
    <div class="row d-flex justify-content-center">
        @foreach ($products as $product)
            <div class="card col-md-3 m-2">
                <img class="card-img-top" src="#" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <a class="btn btn-primary" href="#" class="card-link">Add To Cart</a>
                    <a class="btn btn-info" href="#" class="card-link">Show Product</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
