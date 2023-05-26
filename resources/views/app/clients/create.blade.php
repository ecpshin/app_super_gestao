@extends('app.layouts.basic')

@section('title', 'Adicionar Cliente')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Clientes</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary" role="button">Lista de Clientes</a>
            </div>
            <form method="post" action="{{ route('clients.store') }}" class="form">
                @csrf
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                       class="form-control @error('nome') is-invalid @enderror" placeholder="Nome">
                @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="cep" id="cep" value="{{ old('cep') }}"
                       class="form-control @error('cep') is-invalid @enderror" placeholder="cep">
                @error('cep')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="logradouro" id="logradouro" value="{{ old('logradouro') }}"
                       class="form-control @error('logradouro') is-invalid @enderror" placeholder="Endereço">
                <span class="small text-muted" style="align-self: flex-start">Ex.: Rua da Saudade, 15</span>
                @error('logradouro')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="complemento" id="complemento" value="{{ old('complemento') }}"
                       class="form-control @error('complemento') is-invalid @enderror" placeholder="complemento">
                @error('complemento')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="bairro" id="bairro" value="{{ old('bairro') }}"
                       class="form-control @error('bairro') is-invalid @enderror" placeholder="bairro">
                @error('bairro')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="localidade" id="localidade" value="{{ old('localidade') }}"
                       class="form-control @error('localidade') is-invalid @enderror" placeholder="localidade">
                @error('localidade')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="uf" id="uf" value="{{ old('uf') }}"
                       class="form-control @error('uf') is-invalid @enderror" placeholder="uf">
                @error('uf')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Salvar</button>
                    <a href="{{ route('clients.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

