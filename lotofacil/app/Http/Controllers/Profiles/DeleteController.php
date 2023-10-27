<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DeleteController extends Controller
{
    public function destroy($id) {
       
        if(!$user = User::find($id)) 
        return redirect()->route('index')->with('success', 'Perfil excluído com sucesso.');

        $user->delete();
        
        return view('index', compact('user'));
    }
}
