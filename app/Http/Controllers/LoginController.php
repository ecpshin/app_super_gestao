<?php

namespace App\Http\Controllers;

use App\Http\Requests\Fake\FakeLoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index($erro = null)
    {
      return view('site.login',  ['erro' => $erro]);
    }

    public function autenticar (FakeLoginRequest $request)
    {
        $attributes = $request->validated();

        $user = User::where('email', $attributes['email'])
            ->where('password', $attributes['password'])
            ->get()->first();

        if(isset($user->name)){
            session_start();
            $_SESSION['nome'] = $user->nome;
            $_SESSION['email'] = $user->email;
            return redirect()->route('app.home');
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function logout()
    {
        if(isset($_SESSION['email']))
        {
            session_destroy();
            return redirect()->route('site.index');
        }
    }
}