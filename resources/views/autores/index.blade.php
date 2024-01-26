


@extends('plantilla')
@section('titulo','Listado')

@section('contenido')

<table>
    <tr class="primeraFila">
        <td>ID</td>
        <td>Nombre</td>
        <td>Nacimiento</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    @foreach($autores as $autor)
    <tr>
        <td>{{ $autor->id }}</td>
        <td>{{ $autor->nombre }}</td>
        <td>{{ $autor->nacimiento }}</td>

        <td><a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-primary">Modificar</a></td>
        <form action="{{ route('autores.destroy', $autor->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <td><input type="submit" class="btn btn-danger" value="Borrar" name="borrar"></td>
        </form>


    </tr>
    @endforeach 
</table>

<table class="insertar">
    <tr>
        <form action="{{ route('autores.store') }}" method="POST">
        @csrf
            <td><input class="inp" placeholder="Nombre..." type="text" name="nombre"></td>
            <td><input class="inp" placeholder="Nacimiento..." type="number" name="nacimiento"></td>
            <td><input type="submit" value="Insertar" name="insertar" class="btn btn-secondary" ></td>
        </form>
    </tr>
</table>


        

@endsection
