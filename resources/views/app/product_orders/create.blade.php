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
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Produto</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Data de Inclusão</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($order->products as $op)
                            <tr>
                                <td class="p-2">{{ $op->id }}</td>
                                <td class="p-2">{{ $op->nome }}</td>
                                <td class="p-2">{{ $op->descricao }}</td>
                                <td class="p-2" style="text-align: right;">{{ $op->pivot->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <form method="post" action="{{ route('product_orders.destroy', [
                                        'productOrder' => $op->pivot->id, 
                                        'order' => $order->id
                                        ]) }}" id="form_{{$op->pivot->id}}"> 
                                        @csrf 
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('form_{{ $op->pivot->id }}').submit()">
                                            Excluir
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="menu_opcoes">
                <a href="{{ route('product_orders.index') }}" class="btn btn-outline-secondary" role="button">Lista de Pedidos</a>
            </div>
            <form method="post" action="{{ route('product_orders.store', $order->id) }}" class="form">
                @csrf
                <select name="product_id" id="product_id" class="form-select">
                    <option value="">Selecione produto</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{$product->nome}}</option>
                        @error('product_id')
                            <option value="{{ old('product_id') }}" @if ($product->id == old('product_id'))
                                selected
                            @endif>{{$product->nome}}</option>
                        @enderror
                    @endforeach
                </select>
                <input type="number" name="quantidade" value="{{ old('quantidade' )}}" class="form-control" placeholder="Quantidade">
                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Salvar</button>
                    <a href="{{ route('product_orders.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection


