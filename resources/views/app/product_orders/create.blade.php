@extends('app.layouts.basic')

@section('title', 'Pedidos Cliente')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Pedidos de Produto</h1>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Detalhes do Pedido
                </div>
                <div class="card-body">
                    <h4>ID Pedido: {{ $order->id }}</h4>
                    <p>Cliente: {{ $order->client_id }}</p>
                </div>
            </div>
            <div class="menu_opcoes">
                <a href="{{ route('product-orders.create') }}" class="btn btn-outline-secondary" role="button">Lista de Pedidos</a>
            </div>
            <form method="post" action="{{ route('product-orders.store', $order->id) }}" class="form">
                @csrf
                <select name="product_id" id="product_id" class="form-select">
                    <option value="">Selecione produto</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{$product->nome}}</option>
                    @endforeach
                </select>
                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Salvar</button>
                    <a href="{{ route('product-orders.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection


