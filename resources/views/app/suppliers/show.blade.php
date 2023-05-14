@extends('app.layouts.basic')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary" role="button">Novo</a>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Site</th>
                    <th>E-mail</th>
                    <th>UF</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody class="text-black">
                @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{$supplier->id}}</td>
                        <td>{{$supplier->nome}}</td>
                        <td>{{$supplier->site}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->uf}}</td>
                        <td><a href="{{ route('supplier.edit', $supplier->id) }}">Editar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
