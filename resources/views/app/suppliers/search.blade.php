@extends('app.layouts.basic')

@section('title', 'Consultar Fornecedores')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Consultar Fornecedores</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary" role="button">Novo</a>
                <a href="{{ route('supplier.index') }}" class="btn btn-secondary" role="button">Consultar</a>
            </div>
            <form method="post" action="{{ route('app.supplier.listar') }}" class="form_search">
                @csrf
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                <input type="text" name="site" id="site" class="form-control" placeholder="Site">
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                <input type="text" name="uf" id="uf" class="form-control" placeholder="UF">
                <button type="submit" class="btn btn-sm btn-success">Pesquisar</button>
            </form>
        </div>
    </div>
@endsection
