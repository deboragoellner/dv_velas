<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    function index()
    {
        $fornecedores = Fornecedor::All();
        // dd($fornecedores);

        return view('FornecedorList')->with(['fornecedores' => $fornecedores]);
    }

    function create()
    {
        return view('FornecedorForm');
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'empresa' => 'required | max: 120',
                'telefone' => ' nullable | max: 100',
                'mercadoria' => 'required | max: 20',
            ],
            [
                'empresa.required' => 'O empresa é obrigatório',
                'empresa.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'mercadoria.max' => 'Só é permitido 100 caracteres',
            ]
        );

        //dd( $request->nome);
        Fornecedor::create([
            'empresa' => $request->empresa,
            'telefone' => $request->telefone,
            'mercadoria' => $request->mercadoria,
        ]);

        return \redirect()->action(
            'App\Http\Controllers\FornecedorController@index'
        );
    }

    function edit($id)
    {

        $fornecedor = Fornecedor::findOrFail($id);
        //dd($fornecedor);

        return view('FornecedorForm')->with([
            'fornecedor' => $fornecedor,
        ]);
    }

    function show($id)
    {
        //select * from fornecedor where id = $id;
        $fornecedor = Fornecedor::findOrFail($id);
        //dd($fornecedor);

        return view('FornecedorForm')->with([
            'fornecedor' => $fornecedor,
        ]);
    }

    function update(Request $request)
    {
        //dd( $request->nome);
        $request->validate(
            [
                'empresa' => 'required | max: 120',
                'telefone' => ' nullable | max: 100',
                'mercadoria' => 'required | max: 20',
            ],
            [
                'empresa.required' => 'O empresa é obrigatório',
                'empresa.max' => 'Só é permitido 120 caracteres',
                'telefone.required' => 'O telefone é obrigatório',
                'telefone.max' => 'Só é permitido 20 caracteres',
                'mercadoria.max' => 'Só é permitido 100 caracteres',
            ]
        );

        Fornecedor::updateOrCreate(
            ['id' => $request->id],
            [
                'empresa' => $request->empresa,
                'telefone' => $request->telefone,
                'mercadoria' => $request->mercadoria,
            ]
        );

        return \redirect()->action(
            'App\Http\Controllers\FornecedorController@index'
        );
    }
    //

    function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);

        $fornecedor->delete();

        return \redirect()->action(
            'App\Http\Controllers\FornecedorController@index'
        );
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $fornecedores = Fornecedor::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $fornecedores = Fornecedor::all();
        }

        //dd($fornecedores);
        return view('FornecedorList')->with(['fornecedores' => $fornecedores]);
    }
}
// npm install --save-dev vite laravel-vite-plugin
// npm install --save-dev @vitejs/plugin-vue
// npm run build

