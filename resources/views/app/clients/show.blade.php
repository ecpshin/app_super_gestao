@extends('app.layouts.basic')

@section('title', 'Clientes')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Dados Cliente</h1>
        </div>
        <div class="container">
            <div style="width: 100%">
                <div class="btn-group mt-3 mb-3" style="border: 1px solid #ccc">
                    <a href="{{ route('clients.create') }}" class="btn btn-primary" role="button">Novo</a>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary" role="button">Voltar</a>
                </div>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="text-black">
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->nome}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-warning">Editar</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

