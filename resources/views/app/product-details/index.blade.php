@extends('app.layouts.basic')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Produtos Detalhe</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos-detalhe.create') }}" class="btn btn-primary" role="button">Novo</a>
                <a href="#" class="btn btn-secondary" role="button" disabled>Consultar</a>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Unidade</th>
                    <th>Dimensões</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody class="text-black">
                @foreach($products as $pdt)
                    @if(isset($pdt->productDetail))
                    <tr>
                        <td>{{$pdt->productDetail->id}}</td>
                        <td>{{$pdt->nome}}</td>
                        <td>{{$pdt->productDetail->unit_id}}</td>
                        <td>{{$pdt->productDetail->dimensoes}}</td>
                        <td>
                            <a href="{{route('produtos-detalhe.edit', $pdt->productDetail->id)}}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="#" class="btn btn-sm btn-warning">Ver</a>
                        </td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
