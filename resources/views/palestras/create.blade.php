@extends('layouts.app')
@section('title', 'Nova Palestra')
@section('content')
    <h2>Cadastrar Palestra</h2>
    <form action="{{ route('palestras.store') }}" method="POST">
    @include('palestras._form')
        <button class="btn btn-success" type="submit">Salvar</button>
        <a class="btn btn-danger" href="{{ route('palestras.index')}}">Cancelar</a>
    </form>
@endsection