<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado na sessão
        if (!Auth::check()) {
            return redirect()->route('login'); // Redireciona para a página de login
        }

        // Armazene o ID do usuário autenticado na request
        $request->merge(['user_id' => Auth::id()]); 

        return $next($request);
    }
}