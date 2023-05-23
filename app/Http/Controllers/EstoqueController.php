<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    function index()
    {
        $estoque = Estoque::All();
        // dd($estoque);

        return view('EstoqueList')->with(['estoque' => $estoque]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'essencia' => 'required | max: 120',
                'cera' => 'required | max: 100',
                'pavio' => ' required | email | max: 100',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'essencia.required' => 'Essência é obrigatório',
                'essencia.max' => 'Só é permitido 120 caracteres',
                'cera.required' => 'Cera é obrigatório',
                'cera.max' => 'Só é permitido 100 caracteres',
                'pavio.required' => 'Pavio é obrigatório',
                'pavio.max' => 'Só é permitido 100 caracteres',
            ]
        );

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        if ($imagem) {
            $nome_arquivo =
                date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $nome_arquivo = $diretorio . $nome_arquivo;
        }

        //dd( $request->nome);
        Estoque::create([
            'essencia' => $request->essencia,
            'cera' => $request->cera,
            'pavio' => $request->pavio,
            'imagem' => $nome_arquivo,
        ]);

        return \redirect()->action(
            'App\Http\Controllers\EstoqueController@index'
        );
    }

    function edit($id)
    {
        //select * from estoque where id = $id;
        $estoque = Estoque::findOrFail($id);
        //dd($estoque);

        return view('EstoqueForm')->with([
            'estoque' => $estoque,
        ]);
    }

    function show($id)
    {
        //select * from estoque where id = $id;
        $estoque = Estoque::findOrFail($id);
        //dd($estoque);

        return view('EstoqueForm')->with([
            'estoque' => $estoque,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'essencia' => 'required | max: 120',
                'cera' => 'required | max: 100',
                'pavio' => ' required | email | max: 100',
                'imagem' => ' nullable|image|mimes:jpeg,jpg,png|max:2048',
            ],
            [
                'essencia.required' => 'Essência é obrigatório',
                'essencia.max' => 'Só é permitido 120 caracteres',
                'cera.required' => 'Cera é obrigatório',
                'cera.max' => 'Só é permitido 100 caracteres',
                'pavio.required' => 'Pavio é obrigatório',
                'pavio.max' => 'Só é permitido 100 caracteres',
            ]
        );

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        if ($imagem) {
            $nome_arquivo =
                date('YmdHis') . '.' . $imagem->getClientOriginalExtension();

            $diretorio = 'imagem/';
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $nome_arquivo = $diretorio . $nome_arquivo;
        }

        Estoque::updateOrCreate(
            ['id' => $request->id],
            [
                'essencia' => $request->essencia,
                'cera' => $request->cera,
                'pavio' => $request->pavio,
                'imagem' => $nome_arquivo,
            ]
        );

        return \redirect()->action(
            'App\Http\Controllers\EstoqueController@index'
        );
    }
    //

    function destroy($id)
    {
        $estoque = Estoque::findOrFail($id);

        $estoque->delete();

        return \redirect()->action(
            'App\Http\Controllers\EstoqueController@index'
        );
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $estoque = Estoque::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $estoque = Estoque::all();
        }

        //dd($estoque);
        return view('EstoqueList')->with(['estoque' => $estoque]);
    }
}
// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build
