<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ShowController extends Controller {

    public function show() {
        $user = Auth::user();
        return view('profiles.show', compact('user'));
    }
    
    public function showEditForm() {
        return view('profiles.edit');
    }

    public function processEditForm(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'data_nascimento' => 'date',
            'email' => 'required|email',
        ]);
    
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->data_nascimento = $request->input('data_nascimento');
        $user->email = $request->input('email');
        $user->save();
    
        return redirect()->route('profile.show');
    }

    public function showChangePassword() {
        return view('profiles.changePassword');
    }

    public function changePassword(Request $request) {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);
    
        if (Hash::check($request->current_password, Auth::user()->password)) {
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();
    
            return redirect()->route('index')->with('success', 'Senha alterada com sucesso!');
        } else {
            return back()->with('error', 'Senha atual incorreta.');
        }
    }
}