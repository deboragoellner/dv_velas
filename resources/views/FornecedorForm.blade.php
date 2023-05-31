@extends('base.app')
@section('conteudo')
    @php
        if (!empty($fornecedor->id)) {
            $route = route('fornecedor.update', $fornecedor->id);
        } else {
            $route = route('fornecedor.store');
        }
    @endphp
@section('tituloPagina', 'Formulário de Forncedores')
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
    <h1>Novo fornecedor</h1>
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
    <form action="{{$route}}" method= "POST">
        @csrf
        @if (!empty($fornecedor->id))
            @method('PUT')
        @endif
        <input type="hidden" name="id"
        value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($fornecedor->id)) {{ $fornecedor->id }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Empresa</label>
        <input type="text" class="form-control" name="empresa"value="@if (!empty(old('empresa'))) {{ old('empresa') }} @elseif(!empty($fornecedor->empresa)) {{ $fornecedor->empresa }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone"value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($fornecedor->telefone)) {{ $fornecedor->telefone }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Mercadoria</label>
        <input type="text" class="form-control" name="mercadoria"value="@if (!empty(old('mercadoria'))) {{ old('mercadoria') }} @elseif(!empty($fornecedor->mercadoria)) {{ $fornecedor->mercadoria }} @else {{ '' }} @endif" /><br>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-mr-2" role="group" aria-label="First group">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-info"><a href="{{ url('dashboard') }}">Voltar</a></button>
            </div>
        </div>
    </form>
</div>
@endsection

