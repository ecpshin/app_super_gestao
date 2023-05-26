@extends('app.layouts.basic')

@section('title', 'Pedidos')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Pedidos</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('orders.create') }}" class="btn btn-primary" role="button">Novo</a>
                <a href="#" class="btn btn-secondary" role="button">Consultar</a>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                </tr>
                </thead>
                <tbody class="text-black">
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->client->nome }}</td>
                        <td><a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-warning">Editar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
