@extends('app.layouts.basic')

@section('title', 'Produtos')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Produtos</h1>
        </div>
        <div class="container">
            <div style="width: 100%">
                <div class="btn-group mt-3 mb-3" style="border: 1px solid #ccc">
                    <a href="{{ route('produtos.create') }}" class="btn btn-primary" role="button">Novo</a>
                    <a href="{{ route('produtos.pesquisar' ) }}" class="btn btn-secondary" role="button">Consultar</a>
                </div>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Fornecedor</th>
                    <th>Dimensões</th>
                    <th>Unidade</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody class="text-black">
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->nome}}</td>
                        <td>{{$product->descricao}}</td>
                        <td>{{$product->peso}}</td>
                        <td>{{ $product->supplier->nome }}</td>
                        <td>{{$product->productDetail->dimensoes ?? ''}}</td>
                        <td>{{$product->unit->description}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('produtos.show', $product->id)}}" class="btn btn-secondary">Ver</a>
                                <a href="{{route('produtos.edit', $product->id)}}" class="btn btn-warning">Editar</a>
                                <form method="post" action="{{ route('produtos.delete', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
