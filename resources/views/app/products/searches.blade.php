@extends('app.layouts.basic')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Produtos</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos.create') }}" class="btn btn-primary" role="button">Novo</a>
                <a href="{{ route('produtos.pesquisar' ) }}" class="btn btn-secondary" role="button">Consultar</a>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Pesol</th>
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
                        <td>{{$product->unit_id}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                            <a href="#" class="btn btn-sm btn-warning">Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
