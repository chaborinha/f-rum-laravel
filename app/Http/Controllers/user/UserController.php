<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $id_profile = Auth::id();
        $user = User::find($id_profile);

        return view('user/index', ['user' => $user]);
    }

    public function create(): View
    {
        return view('user/create');
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $created_user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => date('Y-m-d H:m:s')
        ]);

        if ($created_user):
            return redirect()->route('login');
        else:
            dd('erro');
        endif;
    }
}
