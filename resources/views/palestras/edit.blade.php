@extends('layouts.app')
@section('title', 'Editar Palestra')
@section('content')
    <div class="col-lg-5">
        <h2>Editar Palestra</h2>
        <form action="{{ route('palestras.update', $palestra) }}" method="POST">
            @csrf
            @method('PUT')
            @include('palestras._form', ['palestra' => $palestra])
            <button class="btn btn-success" type="submit">Atualizar</button>
            <a class="btn btn-danger" href="{{ route('palestras.index')}}">Cancelar</a>
        </form>
    </div>
@endsection