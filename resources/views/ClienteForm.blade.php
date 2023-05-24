@extends('base.app')
@section('conteudo')
    @php
        if (!empty($cliente->id)) {
            $route = route('cliente.update', $cliente->id);
        } else {
            $route = route('cliente.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Cliente')

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
@endsection
