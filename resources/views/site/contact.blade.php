@extends('site.layouts.template')

@section('title', 'Contato')

@section('estilo')
    <link href="{{ asset('storage/css/index.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/css/contato.css') }}" rel="stylesheet" />
@endsection
      @section('content')
      <main class="main">
        <div class="main_banner">
          <h1>Entre em contato conosco</h1>
        </div>
        <section class="formulario">
            @component('site.layouts._components.form_contact', ["style" => 'w-50', 'subjects' => $subjects])
            @endcomponent
        </section>
      </main>
      @include('site.layouts._partials.footer');
  </div>
@endsection
