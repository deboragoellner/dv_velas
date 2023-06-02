@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Listagem de Estoque')
    <div class="container">
        <form action="{{ route('estoque.search') }}" method="post">
            @csrf
            <div class="valores">
                <style>
                    .valores {
                        border: 1px solid gray;
                        padding: 8px;
                    }

                    h1 {
                        text-align: center;
                        text-transform: uppercase;
                        color: tan;
                        font-size: 50px;
                        font-family: Aboreto;
                    }
                </style>
                <h1>Estoque</h1>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                    <select name="campo" class="form-select">
                    <option value="essencia">Essencia</option>
                    <option value="cera">Cera</option>
                    <option value="pavio">Pavio</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
                </div>
                <div class="col-6">
                    <input type="submit" class="btn btn-outline-secondary" value="Buscar"/>
                </div>
            </div>
        </form>
    </div>

    <div class="cadastra">
        <style>
            .cadastra {
                margin: 0;
            }

            .button {
                border: 1px solid gray;
                padding: 8px;
                font-family: Aboreto;
                display: block;
                margin: 0 auto;
                font-size: 18px;
            }

            button a:link,
            button a:visited {
                text-decoration: none;
                /* retira sublinhado*/
                font-weight: bold;
                /* negrito*/
                color: black;
            }

            button a:hover {
                color: tan;
            }
        </style>
    </div>

    <div class="cadastra">
        <br><br>
        <button class="button button1"><a href="{{ url('/estoque/create') }}">Cadastrar um novo item do
                estoque</a></button>
        <br>
        <div class="tabela">
            <table class="table table-bordered table-hover" style="font-family: Aboreto;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Essencia</th>
                        <th>Cera</th>
                        <th>Pavio</th>
                    </tr>
                </thead>

                @foreach ($estoque as $item)
                    @php
                        $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.png';
                    @endphp
                    <tr>
                        <td scope='row'>{{ $item->id }}</td>
                        <td>{{ $item->essencia }}</td>
                        <td>{{ $item->cera }}</td>
                        <td>{{ $item->pavio }}</td>
                        <td><img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" /> </td>
                        <td><a href="{{ action('App\Http\Controllers\EstoqueController@edit', $item->id) }}"><i
                                    class='fa-solid fa-pencil' style='color:blue;'></i></a></td>
                        <td>
                            <form method="POST"
                                action="{{ action('App\Http\Controllers\EstoqueController@destroy', $item->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button type="submit" onclick='return confirm("Deseja Excluir?")'
                                    style='all: unset;'><i class='fa-solid fa-trash-can' style='color: #6d1818;'></i>
                                </button>
                            </form>
                    </tr>
                @endforeach
            </table>
        </div>
        <button class="button button1"><a href="{{ url('dashboard') }}">Voltar</a></button>
    </div>
@endsection
