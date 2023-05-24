@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Listagem de Cliente')
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
            <h1>Clientes</h1>
        </div>
        <div class="container">
            <form action="ClienteList.php" method="post">
                <select name="campo">
                    <option value="nome">Nome</option>
                    <option value="email">Email</option>
                    <option value="cpf">CPF</option>
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
            <button class="button button1"><a href="{{ url('/cliente') }}">Cadastrar um novo cliente</a></button>
            <div class="tabela">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">CPF</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <?php
                    foreach($clientes as $item){
                    echo "<tr>
                    <td>$item->id</td>
                    <td>$item->nome</td>
                    <td>$item->email</td>
                    <td>$item->cpf</td>
                    <td><a href='./ClienteForm.php?id=$item->id'><i class='fa-solid fa-pencil' style='color:blue;'></i></a></td>
                    <td><a href='./ClienteList.php?id=$item->id'
                        onclick='return confirm(\"Deseja excluir?\")'
                        ><i class='fa-solid fa-trash-can' style='color: #6d1818;'></i></i></a></td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
@endsection
