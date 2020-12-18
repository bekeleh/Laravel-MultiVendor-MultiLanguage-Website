@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td scope="row">{{$item->name}}</td>
                    <td>{{Cart::get($item->id)->getPriceSum()}}</td>
                    <td>
                        <form action="{{route('cart.update', $item->id)}}">
                            <input name="quantity" type="number" value="{{$item->quantity}}">
                            <input type="submit" value="save">
                        </form>
                    </td>
                    <td>
                        <a href="{{route('cart.destroy', $item->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total Price: {{Cart::getTotal() }}</h3>
@endsection
