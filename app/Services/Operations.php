<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class Operations
{
    public static function role_user(): RedirectResponse
    {
       ## pegando id do usuario logado e buscando usuario no banco de dados
       $id = Auth::id();
       $user = User::find($id);

       ## redirecionando de acordo com seu nivel de acesso
       if ($user->role == 'user') return redirect()->route('user.index');
       if ($user->role == 'admin') return redirect()->route('admin.index');

    }

    public static function decrypt_id($value)
    {
        try {
            $value = Crypt::decrypt($value);          
        } catch (DecryptException $e) {          
            return null;
        }

        return $value;
    }
}