@extends('app.layouts.basic')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('supplier.index') }}" class="btn btn-outline-secondary" role="button">Lista</a>
            </div>
            <form method="post" action="{{ route('supplier.store') }}" class="form">
                @csrf
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                       class="form-control @error('nome') is-invalid @enderror" placeholder="Nome">
                @error('nome')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="site" id="site" value="{{ old('site') }}"
                       class="form-control @error('site') is-invalid @enderror" placeholder="Site">
                @error('site')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="email" name="email" id="email" value=""
                       class="form-control @error('email') is-invalid @enderror" placeholder="email">
                @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <input type="text" name="uf" id="uf" value="" class="form-control @error('uf') is-invalid @enderror" placeholder="UF">
                @error('uf')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <button type="submit" class="btn btn-success btn-pos">Salvar</button>
            </form>
        </div>
    </div>
@endsection
