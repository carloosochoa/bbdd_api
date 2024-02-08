


@extends('plantilla')
@section('titulo','Listado')

@section('contenido')

<table>
    <tr class="primeraFila">
        <td>ID</td>
        <td>Titulo</td>
        <td>Editorial</td>
        <td>Autores</td>
        <td>Precio</td>
        <td>Modificar</td>
        <td>Borrar</td>
    </tr>
    @foreach($libros as $libro)
    <tr>
        <td>{{ $libro->id }}</td>
        <td>{{ $libro->titulo }}</td>
        <td>{{ $libro->editorial }}</td>
        
        <?php $autorEncontrado = false ?>
        @foreach($autores as $autor)
            @if($autor["id"] == $libro["autor_id"])
                <td>{{$autor->nombre}}</td>
                <?php $autorEncontrado = true?>
            @endif
        @endforeach
        @if(!$autorEncontrado)
            <td>No hay autor</td>
            @endif
        <td>{{ $libro->precio }}</td>

        <td><a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-primary">Modificar</a></td>
        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <td><input type="submit" class="btn btn-danger" value="Borrar" name="borrar"></td>
        </form>


    </tr>
    @endforeach 
</table>


@endsection

