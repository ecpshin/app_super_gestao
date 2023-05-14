<header class="header_home">
    <div class="header_content">
        <img src="{{ asset('storage/img/logo.png') }}" class="logo" alt="" aria-label="Image Logo">
          <ul class="menu">
             <li class="menu-item"><a class="menu-link" href="{{ route('site.index') }}">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="{{ route('site.about')}}">Sobre nós</a></li>
             <li class="menu-item"><a class="menu-link" href="{{ route('site.contact') }}">Contato</a></li>
             <li class="menu-item"><a class="menu-link" href="{{ route('site.login') }}">Acessar</a></li>
          </ul>
    </div>
</header>
