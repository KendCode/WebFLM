@extends('layouts.app')

@section('content')
    <h1>Grupos</h1>
    {{-- <a href="{{ route('grupos.create') }}" class="btn btn-primary">Crear Grupo</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->titulo }}</td>
                    <td>{{ $grupo->descripcion }}</td>
                    <td>{{ $grupo->fecha }}</td>
                    <td>{{ $grupo->ubicacion }}</td>
                    {{-- <td>
                        <a href="{{ route('grupos.edit', $grupo) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('grupos.destroy', $grupo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection