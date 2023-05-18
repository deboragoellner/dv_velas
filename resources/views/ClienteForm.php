<?php
include "../controller/ClienteController.php";
$cliente = new ClienteController();


if(!empty($_POST['id'])){
    $cliente->update($_POST);
    //
}
elseif(!empty($_POST)){
  $cliente->salvar($_POST);


}
if(!empty($_GET['id'])){
    $data= $cliente->buscar($_GET['id']);
}


?>


<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DV Velas</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
        <h1>Cadastro de novos clientes</h1>
    </div>
    <div class="container mt-3">
      <style> label{font-family: Aboreto;}</style>
      <form action="ClienteForm.php" method= "POST">
        <input type="hidden" name="id"value="<?php echo !empty($data->id) ? $data->id: ""?>"/><br>
        <label>Nome</label><br>
        <input type="text" class="form-control" name="nome"value="<?php echo !empty($data->nome) ? $data->nome: ""?>"/><br>
        <label>Email</label><br>
        <input type="text" class="form-control" name="email" value="<?php echo !empty($data->email) ? $data->email: ""?>"/><br>
        <label>CPF</label><br>
        <input type="text" class="form-control" name="cpf" value="<?php echo !empty($data->cpf) ? $data->cpf: ""?>"/>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group-mr-2" role="group" aria-label="First group">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <button type="button" class="btn btn-outline-info"><a href="ClienteList.php">Listar</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="../index.php">Menu</a></button>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
