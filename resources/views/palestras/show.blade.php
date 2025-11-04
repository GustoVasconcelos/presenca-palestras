@extends('layouts.app')
@section('title', 'Detalhes da Palestra')
@section('content')
    <dl class="row">
        <dt class="col-sm-1">Título</dt>
        <dd class="col-sm-11">{{ $palestra->titulo }}</dd>
        <dt class="col-sm-1">Palestrante</dt>
        <dd class="col-sm-11">{{ $palestra->palestrante }}</dd>
        <dt class="col-sm-1">Data</dt>
        <dd class="col-sm-11">{{ optional($palestra->data)->format('d/m/Y H:i') }}</dd>
        <dt class="col-sm-1">Local</dt>
        <dd class="col-sm-11">{{ $palestra->local }}</dd>
        <dt class="col-sm-1">Descrição</dt>
        <dd class="col-sm-11">{{ $palestra->descricao }}</dd>
    </dl>
    <a class="btn btn-primary" href="{{ route('palestras.index') }}">Voltar</a>
@endsection