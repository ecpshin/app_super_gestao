@extends('app.layouts.basic')

@section('title', 'Adicionar Fornecedor')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos.index') }}" class="btn btn-outline-secondary" role="button">Lista</a>
            </div>
            <form method="post" action="{{ route('produtos.store') }}" class="form">
                @csrf
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                       class="form-control @error('nome') is-invalid @enderror" placeholder="Nome">
                @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="descricao" id="descricao" value="{{ old('descricao') }}"
                       class="form-control @error('descricao') is-invalid @enderror" placeholder="Descrição">
                @error('descricao')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="peso" id="peso" value="{{ old('peso') }}"
                           class="form-control @error('peso') is-invalid @enderror" placeholder="Peso">
                @error('peso')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <select name="unit_id" id="unidade" class="form-control @error('unit_id') is-invalid @enderror">
                        <option value="">Selecione...</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->description }}</option>
                        @endforeach
                </select>
                @error('unit_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Salvar</button>
                    <a href="{{ route('produtos.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
