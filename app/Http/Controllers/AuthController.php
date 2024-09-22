<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Se as credenciais estiverem corretas, redireciona o usuário
            return redirect()->intended('dashboard');
        } else {
            // Se falhar, retorna um erro
            return redirect()->back()->withErrors([
                'email' => 'As credenciais fornecidas estão incorretas.',
            ]);
        }
    }

}