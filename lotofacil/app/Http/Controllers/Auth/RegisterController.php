<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'data_nascimento' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $user = User::create([
            'name' => $validatedData['name'],
            'data_nascimento' => $validatedData['data_nascimento'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        
        // Redirecione para a página de confirmação ou login
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
