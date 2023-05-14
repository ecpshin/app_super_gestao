@extends('site.layouts.basic')

@section('title', 'Login')

@section('content')
    <div class="container-home">
        <div class="container-login">
            <img src="{{ asset('storage/img/user.png') }}" class="img-thumbnail thumb" alt="">
                <form method="post" action="{{route('site.login')}}" class="form-login">
                    @csrf
                    <div class="m-3 w-100">
                        <input type="email" name="email" id="email" value="{{old('email')}}"
                           class="form-control @error('email') is-invalid @enderror" placeholder="e-mail">
                        @error('email')<span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <div class="m-3 w-100">
                    <input type="password" name="password" id="password"
                           value="" class="form-control @error('password') is-invalid @enderror" placeholder="senha">
                        @error('password')<span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <input type="submit" CLASS="btn btn-primary btn-login" value="LOGIN">
                    @if(isset($erro))
                        <div class="text-danger">
                            @if($erro == 1)
                                Usuário ou senha inválidos!
                            @else
                                Acesso Negado! Usuário não autenticado!
                            @endif
                        </div>
                    @endif
                </form>
            </div>
      </div>
@endsection
