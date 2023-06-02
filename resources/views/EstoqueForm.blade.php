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
            font-size: 50px;
            font-family: Aboreto;
        }
    </style>
    <h1>Novo item do estoque</h1>
</div>
<div class="container mt-3">
    <style>
        .button {
            border: 1px solid gray;
            padding: 8px;
            font-family: Aboreto;
        }
        button a:link, button a:visited{
            text-decoration: none; /* retira sublinhado*/
            color: rgb(0, 195, 255);
        }
        button a:hover{
            color: white;
        }
    </style>
    <style> label{font-family: Aboreto;}</style>
    <form action="{{$route}}" method= "POST" enctype="multipart/form-data">
        @csrf
        @if (!empty($estoque->id))
            @method('PUT')
        @endif
        <input type="hidden" name="id"value="<?php echo !empty($estoque->id) ? $estoque->id: ""?>"/><br>
        <label>Essencia</label><br>
        <input type="text" name="essencia" class="form-control" value="<?php echo !empty($estoque->essencia) ? $estoque->essencia: ""?>"/><br>
        <label>Cera</label><br>
        <input type="text" name="cera" class="form-control" value="<?php echo !empty($estoque->cera) ? $estoque->cera: ""?>"/><br>
        <label>Pavio</label><br>
        <input type="text" name="pavio" class="form-control"  value="<?php echo !empty($estoque->pavio) ? $estoque->pavio: ""?>"/>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        </div>
        @php
        $nome_imagem = !empty($estoque->imagem) ? $estoque->imagem : 'sem_imagem.png';
        @endphp
        <div class="col-6">
            <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="300px" />
            <input type="file" class="form-control" name="imagem" /><br>
        </div>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-mr-2" role="group" aria-label="First group">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <button type="button" class="btn btn-outline-info"><a href="{{ url('estoque') }}">Voltar</a></button>
            </div>
        </div>
    </form>
</div>
@endsection
