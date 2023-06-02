@extends('base.app')
@section('conteudo')
    @php
        if (!empty($leituradeboravitoria->id)) {
            $route = route('leituradeboravitoria.update', $leituradeboravitoria->id);
        } else {
            $route = route('leituradeboravitoria.store');
        }
    @endphp
@section('tituloPagina', 'Formulário  Leitura Débora e Vitória')
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
    <h1>Novo registro Leitura Débora e Vitória</h1>
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
        @if (!empty($leituradeboravitoria->id))
            @method('PUT')
        @endif
        <input type="hidden" name="id"
        value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($leituradeboravitoria->id)) {{ $leituradeboravitoria->id }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Data Leitura</label>
        <input type="text" class="form-control" name="data_leitura"value="@if (!empty(old('data_leitura'))) {{ old('data_leitura') }} @elseif(!empty($leituradeboravitoria->data_leitura)) {{ $leituradeboravitoria->data_leitura }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Hora Leitura</label>
        <input type="text" class="form-control" name="hora_leitura"value="@if (!empty(old('hora_leitura'))) {{ old('hora_leitura') }} @elseif(!empty($leituradeboravitoria->hora_leitura)) {{ $leituradeboravitoria->hora_leitura }} @else {{ '' }} @endif" /><br>
        <label class="form-label">Valor sensor</label>
        <input type="text" class="form-control" name="valor_sensor"value="@if (!empty(old('valor_sensor'))) {{ old('valor_sensor') }} @elseif(!empty($leituradeboravitoria->valor_sensor)) {{ $leituradeboravitoria->valor_sensor }} @else {{ '' }} @endif" />
        <div class="col-3">
            <label class="form-label">Sensor</label><br>
            <select name="sensor" class="form-select">
                @foreach ($sensor as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3">
            <label class="form-label">Mac</label><br>
            <select name="mac" class="form-select">
                @foreach ($mac as $item)
                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group-mr-2" role="group" aria-label="First group">
                <button type="submit" class="btn btn-outline-success">Salvar</button>
                <button type="button" class="btn btn-outline-info"><a href="{{ url('leituradeboravitoria') }}">Voltar</a></button>
            </div>
        </div>
    </form>
</div>
@endsection
