@extends('app.layouts.basic')

@section('content')
    <form method="post" action="{{ route('produtos.listar') }}">
        @csrf
        <input type="text" name="nome" id="nome">
        <input type="text" name="descricao" id="descricao">
        <input type="text" name="peso" id="peso">
        <select name="unit_id" id="unit_id">
            <option value="">Seleção de unidade</option>
            @foreach($units as $u)
                <option value="{{ $u->id }}">{{ $u->description }}</option>
            @endforeach
        </select>
        <button type="submit">Pesquisar</button>
    </form>
@endsection
