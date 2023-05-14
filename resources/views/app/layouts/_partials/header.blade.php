<header class="header_home">
    <div class="header_content">
        <img src="{{ asset('storage/img/logo.png') }}" class="logo" alt="" aria-label="Image Logo">
        <ul class="menu">
            <li class="menu-item"><a class="menu-link" href="{{route('app.home')}}">Home</a></li>
            <li class="menu-item"><a class="menu-link" href="{{route('app.client')}}">Clientes</a></li>
            <li class="menu-item"><a class="menu-link" href="{{route('supplier.index')}}">Fornecedores</a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('produtos.index') }}">Produtos</a></li>
            <li class="menu-item"><a class="menu-link" href={{ route('produtos-detalhe.index')}}>Produtos Detalhes</a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('app.logout') }}">Sair</a></li>
        </ul>
        
    </div>    
</header>
