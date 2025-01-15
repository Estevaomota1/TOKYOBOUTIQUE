<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Adicione o modelo de User para criar o novo usuário
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Exibe o formulário de login
    public function show()
    {
        return view('auth.login'); // Crie o view auth/login.blade.php
    }

    // Processa o registro de um novo usuário
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Cria o usuário no banco de dados
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password), // Senha criptografada
        ]);

        // Faça o login do usuário após o registro
        Auth::login($user);

        // Redireciona para a página principal ou dashboard
        return redirect()->route('home');
    }

    // Processa o login do usuário
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home'); // Se o login for bem-sucedido, redireciona
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas são inválidas.',
        ]);
    }
}
