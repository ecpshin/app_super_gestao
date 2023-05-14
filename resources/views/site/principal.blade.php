@extends('site.layouts.template')

@section('title', 'Home')
@section('estilo')
    <link href="{{asset($path.'/css/index.css')}}" rel="stylesheet" />
@endsection
    @section('content')
    <main class="main">
        <section class="main__panel_left vh-100">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.</p>
                <div class="chamada">
                    <img src="{{ asset($path.'img/check.png') }}" alt="" />
                    <span>Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset($path.'img/check.png') }}" alt="" />
                    <span>Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video"></div>
        </section>
        <section class="main__panel_right vh-100">
            <div class="contato">
                <h1>Contato</h1>
                <p>
                    Caso tenha qualquer dúvida por favor entre em contato com nossa
                    equipe pelo formulário abaixo.
                </p>
                @component('site.layouts._components.form_contact', ['style' => 'w-100', 'subjects' => $subjects]) @endcomponent
            </div>
        </section>
    </main>
</div>
@endsection
