<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Services\Operations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $validated = $request->validated();

        // Desencriptando o post_id
        $post_id = (new Operations())->decrypt_id($request->post_id);

        // Verificando se o post existe
        $post = Post::find($post_id);
        if (!$post) {
            return redirect()->route('post.index')->with('error', 'Post não encontrado.');
        }

        // Criando o comentário
        Comment::create([
            'body' => $validated['body'], 
            'user_id' => Auth::id(), 
            'post_id' => $post_id, 
        ]);

        // Redirecionando para a página do post com sucesso
        return redirect()->route('post.show', $post_id)->with('success', 'Comentário adicionado com sucesso!');
    }
}
