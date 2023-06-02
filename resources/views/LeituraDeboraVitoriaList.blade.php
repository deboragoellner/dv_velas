@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Listagem Leitura Débora e Vitória')

<form action="{{ route('leituradeboravitoria.search') }}" method="post">
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
        <h1>Leitura Débora e Vitória</h1>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            <select name="campo" class="form-select">
                <option value="dataleitura">Data Leitura</option>
                <option value="horaleitura">Hora Leitura</option>
                <option value="valor_sensor">Valor sensor</option>
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
        button a:link, button a:visited{
            text-decoration: none; /* retira sublinhado*/
            font-weight: bold; /* negrito*/
            color: black;
        }
        button a:hover{
            color: tan;
        }
    </style>
</div>

<div class="cadastra">
    <br><br>
    <button class="button button1"><a href="{{ url('/leituradeboravitoria/create') }}">Cadastrar um novo registro de leitura</a></button>
    <br><br>
    <div class="tabela">
        <table class="table table-bordered table-hover" style="font-family: Aboreto;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data Leitura</th>
                    <th>Hora Leitura</th>
                    <th>Valor sensor</th>
                    <th>Sensor</th>
                    <th>Mac</th>
                </tr>
            </thead>


            @foreach($leituradeboravitoria as $item)
                <tr>
                    <td scope='row'>{{ $item->id}}</td>
                    <td>{{$item->dataleitura}}</td>
                    <td>{{$item->horaleitura}}</td>
                    <td>{{$item->valor_sensor}}</td>
                    <td>{{$item->sensor->nome}}</td>
                    <td>{{$item->sensor->contador}}</td>
                    <td>{{$item->mac->nome}}</td>
                    <td>{{$item->mac->contador}}</td>
                    <td><a href="{{ action('App\Http\Controllers\LeituraDeboraVitoriaController@edit', $item->id) }}"><i
                        class='fa-solid fa-pencil' style='color:blue;'></i></a></td>
                    <td>
                    <form method="POST"
                        action="{{ action('App\Http\Controllers\LeituraDeboraVitoriaController@destroy', $item->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset;'><i
                                class='fa-solid fa-trash-can' style='color: #6d1818;'></i>
                        </button>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
    <button class="button button1"><a href="{{ url('dashboard') }}">Voltar</a></button>
</div>
@endsection
