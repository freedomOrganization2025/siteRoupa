<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registroDB(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|confirmed|min:6',
        ]);

        // Cria o usuário
        Cliente::create([
            'nome' => $request->name,
            'email' => $request->email,
            'senha' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Conta criada com sucesso!');
    }
}
