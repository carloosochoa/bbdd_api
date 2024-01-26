

@extends('plantilla')
@section('titulo','Listado')

@section('contenido')

<table>
    <tr class="primeraFila">
        <td>ID</td>
        <td>Nombre</td>
        <td>Nacimiento</td>
    </tr>
    <form action="{{ route('autores.update', $autor->id) }}" method="POST">
        @csrf
        @method('PUT')
    <tr>
        <td>{{ $autor->id }}</td>
        <td><input type="text" name="nombre" value="{{ $autor->nombre }}"></td>
        <td><input type="number" name="nacimiento" value="{{ $autor->nacimiento }}"></td>
    </tr>
    </table>



<input class="btn btn-primary edit" type="submit" value="Modificar autor" name="botonModificar">
</form>
@endsection