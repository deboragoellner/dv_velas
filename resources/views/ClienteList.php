<?php
include "../controller/ClienteController.php";

    $cliente = new ClienteController();
    $load = $cliente->carregar();

    if(!empty($_GET['id'])){
        $cliente->deletar($_GET['id']);
        header("location: ClienteList.php");
    }
    if(!empty($_POST)){
        $load = $cliente->pesquisar($_POST);
    }
    else{
        $load = $cliente->carregar();
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DV Velas</title>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
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
            <button class="button button1"><a href="ClienteForm.php">Cadastrar um novo cliente</a></button>
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
                    foreach($load as $item){
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
</html>
