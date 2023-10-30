<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DeleteController extends Controller
{
    public function deleteAccount() {
        $user = Auth::user();
        return view('profiles.delete', compact('user'));
    }

    public function destroy(Request $request, $id) {
        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            $user->delete();
            Auth::logout();

            return redirect()->route('index')->with('success', 'Conta excluída com sucesso!');
        } else {
            return redirect()->route('profile.show')->with('error', 'Senha incorreta. A conta não foi excluída.');
        }
    }
}
