@extends('app.layouts.basic')

@section('title', 'Adicionar Fornecedor')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos-detalhe.index') }}" class="btn btn-outline-secondary" role="button">Lista</a>
            </div>
            <form method="post" action="{{ route('produtos-detalhe.store') }}" class="form">
                @csrf
                <input type="text" name="product_id" id="product_id" value="{{ old('product_id') }}"
                       class="form-control @error('product_id') is-invalid @enderror" placeholder="Produto">
                @error('product_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <select name="unit_id" id="unit_id" class="form-select @error('unit_id') is-invalid @enderror">
                        <option value="">Selecione...</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->description }}</option>
                        @endforeach
                </select>
                @error('unit_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="dimensoes" id="dimensoes" value="{{ old('dimensoes') }}"
                           class="form-control @error('dimensoes') is-invalid @enderror" placeholder="Dimensões: C X L X A">
                <span class="small text-muted">Dimensões Comprimento X Largura x Altura</span>           
                @error('dimensoes')<span class="invalid-feedback">{{ $message }}</span>@enderror


                <button type="submit" class="btn btn-success btn-pos">Salvar</button>
            </form>
        </div>
    </div>
@endsection
