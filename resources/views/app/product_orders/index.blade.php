@extends('app.layouts.basic')

@section('title', 'Cliente App')

@section('content')
    <h1>Pedido Produtos</h1>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pedido</th>
                <th>Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productOrders as $productOrder)
            <tr>
                <td>{{ $productOrder->id }}</td>
                <td>{{ $productOrder->order_id }}</td>
                <td>{{ $productOrder->product_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
