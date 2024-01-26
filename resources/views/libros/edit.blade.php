@extends('plantilla')
@section('titulo','Listado')

@section('contenido')

<table>
    <tr class="primeraFila">
        <td>ID</td>
        <td>Titulo</td>
        <td>Editorial</td>
        <td>Precio</td>
    </tr>
    <form action="{{ route('libros.update', $libros->id) }}" method="POST">
        @csrf
        @method('PUT')
    <tr>
        <td>{{ $libros->id }}</td>
        <td><input type="text" name="titulo" value="{{ $libros->titulo }}"></td>
        <td><input type="text" name="editorial" value="{{ $libros->editorial }}"></td>
        <td><input type="number" step="0.01" name="precio" value="{{ $libros->precio }}"></td>
        
    </tr>
    </table>



<input class="btn btn-primary edit" type="submit" value="Modificar autor" name="botonModificar">
</form>
@endsection