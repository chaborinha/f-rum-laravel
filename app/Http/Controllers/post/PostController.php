<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // Implementação da listagem de posts (se necessário)
    }

    public function show($id)
    {
        $id_user = Auth::id();
        if ($id_user) {
            $user = User::find($id_user);
            $post = Post::find($id);

            $comments = Comment::where('post_id', $id)->with('user')->paginate(4);

            return view('post/show', [
                'post' => $post,
                'user' => $user,
                'comments' => $comments,
            ]);
        } else {
            abort(403, 'Unauthorized');
        }
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
            'created_at' => now(),
        ]);

        if ($created_post) {
            return redirect()->route('user.index');
        } else {
            abort(500, 'Post creation failed');
        }
    }
}
