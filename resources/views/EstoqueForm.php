<?php
include "../controller/EstoqueController.php";
$estoque = new EstoqueController();


if(!empty($_POST['id'])){
    $estoque->update($_POST);
    //
}
elseif(!empty($_POST)){
  $estoque->salvar($_POST);


}
if(!empty($_GET['id'])){
    $data= $estoque->buscar($_GET['id']);
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
        <h1>Novo item do estoque</h1>
    </div>
    <div class="container mt-3">
      <style> label{font-family: Aboreto;}</style>
      <form action="EstoqueForm.php" method= "POST">
        <input type="hidden" name="id"value="<?php echo !empty($data->id) ? $data->id: ""?>"/><br>
        <label>Essencia</label><br>
        <input type="text" name="essencia" class="form-control" value="<?php echo !empty($data->essencia) ? $data->essencia: ""?>"/><br>
        <label>Cera</label><br>
        <input type="text" name="cera" class="form-control" value="<?php echo !empty($data->cera) ? $data->cera: ""?>"/><br>
        <label>Pavio</label><br>
        <input type="text" name="pavio" class="form-control"  value="<?php echo !empty($data->pavio) ? $data->pavio: ""?>"/>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group-mr-2" role="group" aria-label="First group">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <button type="button" class="btn btn-outline-info"><a href="EstoqueList.php">Listar</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="../index.php">Menu</a></button>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
