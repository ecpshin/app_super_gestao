@extends('site.layouts.template')
    @section('title', 'Sobre Nós')
    @section('estilo')
        <link href="{{ asset('storage/css/index.css') }}" rel="stylesheet" />
        <link href="{{ asset('storage/css/about.css') }}" rel="stylesheet" />
    @endsection
    @section('content')
      <main class="about">
          <div class="titulo-pagina">
             <h1>Olá, eu sou o Super Gestão</h1>
          </div>
        <div class="informacao-pagina">
          <p>
            O Super Gestão é o sistema online de controle administrativo que
            pode transformar e potencializar os negócios da sua empresa.
          </p>
          <p>
            Desenvolvido com a mais alta tecnologia para você cuidar do que é
            mais importante, seus negócios!
          </p>
        </div>
      </main>
      @include('site.layouts._partials.footer')
@endsection
