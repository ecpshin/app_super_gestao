@extends('app.layouts.basic')

@section('title', 'Editar Produto Detalhe')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Produto Detalhe</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('produtos-detalhe.index') }}" class="btn btn-outline-secondary" role="button">Lista</a>
            </div>
            <div class="mb-3" style="width: 100%; display: flex; flex-direction: column; gap: 5px;">
                <h3 class="text-center mb-2">{{ $produtos_detalhe->product->nome}}</h3>
                <h4 class="text-center mb-3">{{ $produtos_detalhe->product->descricao}}</h4>
            </div>
            <form method="post" action="{{ route('produtos-detalhe.update', $produtos_detalhe->id) }}" class="form">
                @csrf
                @method('PATCH')
                <div style="width: 100%; display: flex; flex-direction: row; align-items: center; gap: 5px">
                    <input type="text" name="product_id" id="product_id" value="{{ $produtos_detalhe->product_id }}" 
                        class="form-control @error('product_id') is-invalid @enderror" placeholder="Produto"                        >                  
                </div>                
                @error('product_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <select name="unit_id" id="unit_id" class="form-select @error('unit_id') is-invalid @enderror">
                        <option value="">Selecione...</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}" @if($unit->id == $produtos_detalhe->unit_id) selected @endif >
                                {{ $unit->unit_name }}
                            </option>
                        @endforeach
                </select>
                <span class="w-100 small text-left text-muted">Descrição: {{ $produtos_detalhe->unit->description}}</span>
                @error('unit_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="dimensoes" id="dimensoes" value="{{ $produtos_detalhe->dimensoes }}"
                           class="form-control @error('dimensoes') is-invalid @enderror" placeholder="Dimensões: C X L X A">
                <span class="small text-muted">Dimensões Comprimento X Largura x Altura</span>           
                @error('dimensoes')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <button type="submit" class="btn btn-success btn-pos">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
