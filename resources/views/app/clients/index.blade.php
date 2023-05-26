@extends('app.layouts.basic')

@section('title', 'Clientes')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Clientes Cadastrados</h1>
        </div>
        <div class="container">
            <div style="width: 100%">
                <div class="btn-group mt-3 mb-3" style="border: 1px solid #ccc">
                    <a href="{{ route('clients.create') }}" class="btn btn-primary" role="button">Novo</a>
                    <a href="#" class="btn btn-secondary" role="button">Consultar</a>
                </div>
            </div>
            <table class="table table-sm table-striped table-bordered">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody class="text-black">
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->nome}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('clients.show', $client->id)}}" class="btn btn-secondary">Ver</a>
                                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-warning">Editar</a>
                                <form method="post" action="{{ route('clients.destroy', $client->id) }}">
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
