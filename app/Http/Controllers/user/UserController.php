<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Services\Operations;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        
    }

    public function create(): View
    {
        return view('user/create');
    }

    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
    }
}
