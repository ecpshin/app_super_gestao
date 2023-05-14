<?php

namespace App\Http\Middleware;

use App\Models\LogAccess;
use Closure;
use Illuminate\Http\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();

        LogAccess::create([
            'log' => 'IP: '.$ip.' requisitou a rota: '.$rota
        ]);

        return $next($request);
    }
}
