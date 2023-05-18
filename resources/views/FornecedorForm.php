<?php
include "../controller/FornecedorController.php";
  $fornecedor = new FornecedorController();

  if(!empty($_POST['id'])){
      $fornecedor->update($_POST);
      //
  }
  elseif(!empty($_POST)){
    $fornecedor->salvar($_POST);


  }
  if(!empty($_GET['id'])){
      $data= $fornecedor->buscar($_GET['id']);
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
        <h1>Novo fornecedor</h1>
    </div>
  <body>
  <div class="container mt-3">
      <style> label{font-family: Aboreto;}</style>
      <form action="FornecedorForm.php" method= "POST">
        <input type="hidden" name="id"value="<?php echo !empty($data->id) ? $data->id: ""?>"/><br>
        <label>Empresa</label><br>
        <input type="text" name="empresa" class="form-control" value="<?php echo !empty($data->empresa) ? $data->empresa: ""?>"/><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone"  class="form-control" value="<?php echo !empty($data->telefone) ? $data->telefone: ""?>"/><br>
        <label>Mercadoria</label><br>
        <input type="text" name="mercadoria"  class="form-control" value="<?php echo !empty($data->mercadoria) ? $data->mercadoria: ""?>"/>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group-mr-2" role="group" aria-label="First group">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <button type="button" class="btn btn-outline-info"><a href="FornecedorList.php">Listar</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="../index.php">Menu</a></button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
