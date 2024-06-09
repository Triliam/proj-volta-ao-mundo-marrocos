<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Método para registrar um novo usuário
    public function register(Request $request)
    {

        //o "validate" faz algumas validações: "required" define as obrigações, exemplo da senha que precisa de no minimo 8 caracteres. O "unique" obriga que o email seja unico no cadastro, evitando duplicidade de cadastro com o mesmo email.
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário com hashing da senha, e o bind para proteger contra SQL Injection que vai salvar as informações que o usuário digitou na variavel $user e fazer a verificação desses dados.
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Senha criptografada usando o método Hash
        ]);

        Auth::login($user);

        return redirect('/login');
    }

    // Método para autenticar um usuário existente
    // Pega as informações que o usuário digitou
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Tentativa de autenticação
        // Verifica se as informações que o usuário digitou está cadastrada no banco
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('comments.index');
        }





        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    // Método para logout do usuário
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('posts.index');
    }

}

