<?php

// app/Http/Controllers/ImportacoesJsonController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportacoesJson;
use Illuminate\Support\Facades\Auth;

class ImportacoesJsonController extends Controller
{
    public function importarJson(Request $request)
    {
        $request->validate([
            'arquivo_json' => 'required|file|mimes:json'
        ]);

        $arquivo = $request->file('arquivo_json');
        $dados = json_decode(file_get_contents($arquivo->getPathname()), true);

        ImportacoesJson::create([
            'user_id' => Auth::id(),
            'nome_arquivo' => $arquivo->getClientOriginalName(),
            'dados' => json_encode($dados)  // Converting array to JSON string
        ]);

        return redirect()->back()->with('success', 'Arquivo JSON importado com sucesso!')
                                 ->with('dados_importados', $dados);
    }

    // public function show()
    // {
    //     $importacoes = ImportacoesJson::all();

    //     return view('posts', compact('posts'));
    // }

    public function destroy($id)
    {
        $importacaoJson = ImportacoesJson::findOrFail($id);
        $importacaoJson->delete();

        return redirect()->route('posts.index')->with('success', 'Arquivo JSON deletado com sucesso.');
    }
}
