<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        if (Auth::id()):
            $post = Post::find($id);
            return view('post/show', 
            ['post' => $post]);
        else:
            dd('erro');
        endif;
    }

    public function create()
    {
        return view('post/create');
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $id_user = Auth::id();

        $created_post = Post::create([
            'user_id' => $id_user,
            'title' => $request->title,
            'body' => $request->body,
            'created_at' => date('Y-m-d H:m:s')
        ]);

        if ($created_post):
            return redirect()->route('user.index');
        else:
            dd('morte');
        endif;
    }
}
