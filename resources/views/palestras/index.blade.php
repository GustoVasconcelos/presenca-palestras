@extends('layouts.app')
@section('title', 'Lista de Palestras')
@section('content')
    <h2>Lista de Palestras</h2>
    @if($palestras->isEmpty())
    <p>Nenhuma palestra cadastrada.</p>
    @else
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Título</th>
                <th>Palestrante</th>
                <th>Data</th>
                <th>Local</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($palestras as $p)
            <tr>
                <td>{{ $p->titulo }}</td>
                <td>{{ $p->palestrante }}</td>
                <td>{{ optional($p->data)->format('d/m/Y H:i') }}</td>
                <td>{{ $p->local }}</td>
                <td>
                    <a class="btn btn-sm btn-warning me-2" href="{{ route('palestras.edit', $p)}}">Editar</a>
                    <a class="btn btn-sm btn-info me-2" href="{{ route('palestras.show', $p)}}">Mostrar</a>
                    <form action="{{ route('palestras.destroy', $p) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Excluir esta palestra?')">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
@endsection