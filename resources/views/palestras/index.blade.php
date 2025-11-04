@extends('layouts.app')
@section('title', 'Lista de Palestras')
@section('content')
    <h2>Lista de Palestras</h2>
    @if($palestras->isEmpty())
    <div class="alert alert-secondary">
        Nenhuma palestra cadastrada.
    </div>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Palestrante</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($palestras as $p)
                <tr>
                    <td class="fw-medium">{{ $p->titulo }}</td>
                    <td>{{ $p->palestrante }}</td>
                    <td>{{ optional($p->data)->format('d/m/Y H:i') }}</td>
                    <td>{{ $p->local }}</td>
                    <td class="text-end">
                        <a class="btn btn-warning" href="{{ route('palestras.edit', $p)}}">Editar</a>
                        <a class="btn btn-info" href="{{ route('palestras.show', $p)}}">Mostrar</a>
                        <form action="{{ route('palestras.destroy', $p) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Excluir esta palestra?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endif
@endsection