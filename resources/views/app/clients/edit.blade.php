@extends('app.layouts.basic')

@section('title', 'Adicionar Fornecedor')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary" role="button">Lista de Clientes</a>
            </div>
            <form method="post" action="{{ route('clients.update', $client->id) }}" class="form">
                @csrf
                @method('PATCH')
                <input type="text" name="nome" id="nome" value="{{ $client->nome }}"
                       class="form-control @error('nome') is-invalid @enderror" placeholder="Nome">
                @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror
                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Atualizar</button>
                    <a href="{{ route('clients.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

