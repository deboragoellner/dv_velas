@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Princípal')
    <div class="container text-center">
        <style>
            .col {
            border: 1px solid gray;
            padding: 8px;
            }

            .col {
            text-align: center;
            text-transform: uppercase;
            color: tan;
            font-size: 20px;
            font-family: Aboreto;
            }
        </style>
        <div class="row">
            <div class="col">
            Cliente
            </div>
            <div class="col">
            Estoque
            </div>
            <div class="col">
            Fornecedor
            </div>
            <div class="col">
            Tabela leitura
            </div>
        </div>
    </div>
@endsection
