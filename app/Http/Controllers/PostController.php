<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\ImportacoesJson;

class PostController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $posts = Post::with('comments.user')->get();
        return view('posts.index', compact('posts'));
    }

    public function index1()
    {
        $posts = Post::with('comments')->get();
        $importacoes = ImportacoesJson::with('user')->get(); // Carregar importações JSON

        // Converter JSON em string formatada para exibição na view
        foreach ($importacoes as $importacao) {
            // // Verifica se o campo dados é um JSON válido antes de decodificar
            // if (is_string($importacao->dados) && is_array(json_decode($importacao->dados, true))) {
            //     // Decodificar o JSON armazenado no banco de dados para um array associativo
            //     $dadosArray = json_decode($importacao->dados, true);

                // Codificar o array de volta para uma string JSON formatada
                $importacao = json_encode($importacao, JSON_PRETTY_PRINT);
            // } else {
            //     // Caso não consiga decodificar, atribui uma string vazia ou outra mensagem de erro
            //     $importacao->dados = "Erro na formatação do JSON";
            // }
        }

        return view('posts.index', compact('posts', 'importacoes'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');
 // Cria um novo post usando Eloquent ORM, automaticamente protegido contra SQL Injection
        Post::create([
            'title' => $request->title,
            'image' => $path,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $post->image = $path;
        }

        $post->title = $request->title;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $this->authorize('update', $post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}


