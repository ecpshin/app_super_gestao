@extends('app.layouts.basic')

@section('title', 'Novo')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary" role="button">Lista</a>
            </div>
            <form method="post" action="{{ route('produtos.create.store') }}" class="form">
                @csrf
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                       class="form-control @error('nome') is-invalid @enderror" placeholder="Nome">
                @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="descricao" id="descricao" value="{{ old('descricao') }}"
                       class="form-control @error('descricao') is-invalid @enderror" placeholder="Descrição">
                @error('descricao')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="peso" id="peso" value=""
                       class="form-control @error('peso') is-invalid @enderror" placeholder="Pseo">
                @error('peso')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <select name="unit_id" id="unidade" value=""
                        class="form-control @error('unit_id') is-invalid @enderror" placeholder="Unidade">
                @error('unit_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <button type="submit" class="btn btn-success btn-pos">Salvar</button>
            </form>
        </div>
    </div>
@endsection
