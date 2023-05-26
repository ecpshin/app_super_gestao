@extends('app.layouts.basic')

@section('title', 'Adicionar Cliente')

@section('content')
    <div class="main_content">
        <div class="title_home">
            <h1>Clientes</h1>
        </div>
        <div class="container">
            <div class="menu_opcoes">
                <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary" role="button">Lista de Clientes</a>
            </div>
            <form method="post" action="{{ route('orders.update', $order->id) }}" class="form">
                @csrf
                @method('PATCH')
                <select name="client_id" id="client_id" class="form-select @error('client_id') is-invalid @enderror">
                    <option value="">Selecione Cliente</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" @if($order->client_id == $client->id) selected @endif>{{ $client->nome }}</option>
                </select>
                @error('client_id')<span class="invalid-feedback">{{ $message }}</span>@enderror

                <div style="width: 100%">
                    <button type="submit" class="btn btn-success btn-pos">Salvar</button>
                    <a href="{{ route('orders.index')}}" role="button" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

