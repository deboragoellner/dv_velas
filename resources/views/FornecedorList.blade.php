@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Listagem de Fornecedores')
    <body>
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
            <h1>Fornecedores</h1>
        </div>
        <div class="container">
            <form action="FornecedorList.php" method="post">
                <select name="campo">
                    <option value="empresa">Empresa</option>
                    <option value="telefone">Telefone</option>
                    <option value="mercadoria">Mercadoria</option>
                </select>
                <div class="row g-3">
                    <div class="col-3">
                        <input type="text" class="form-control" class="form-control"  placeholder="Pesquisar" name="valor"/>
                    </div>
                    <div class="col-3">
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
            <button class="button button1"><a href="{{ url('/fornecedor/create') }}">Cadastrar um novo fornecedor</a></button>
            <br><br>
            <div class="tabela">
                <table class="table table-bordered table-hover" style="font-family: Aboreto;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Empresa</th>
                            <th>Telefone</th>
                            <th>Mercadoria</th>
                        </tr>
                    </thead>


                    @foreach($fornecedores as $item)
                        <tr>
                            <td scope='row'>{{ $item->id}}</td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->empresa}}</td>
                            <td>{{$item->telefone}}</td>
                            <td>{{$item->mercadoria}}</td>
                            <td><a href="{{ action('App\Http\Controllers\FornecedorController@edit', $item->id) }}"><i
                                class='fa-solid fa-pencil' style='color:blue;'></i></a></td>
                            <td>
                            <form method="POST"
                                action="{{ action('App\Http\Controllers\FornecedorController@destroy', $item->id) }}">
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
        </div>
    </body>
@endsection
