@extends('base.app')
@section('conteudo')
    @php
        if (!empty($estoque->id)) {
            $route = route('estoque.update', $estoque->id);
        } else {
            $route = route('estoque.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Estoque')
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
@endsection
