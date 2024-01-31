<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Si el usuario está autenticado pasará al controlador, si no vamos a redirigir a index o mostrar un error
class AdminAuthenticate
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->rol==='admin'){
            return $next($request);
        }

        abort(403, 'No es posible acceder a la página');
    }
}
//En este caso hemos mostrado un error
