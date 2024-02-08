@extends('plantilla')
@section('titulo','Filtro Libros')

@section('contenido')
<table>
    <tr class="primeraFila">
        <td>Autor</td>
        <td>Buscar</td>
    </tr>
    <tr>
    <td>
        <form action="{{ route('libros.filtrar') }}" method="POST">
            @csrf
            @method('POST')
            <select name="autor">
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" name="autor">{{ $autor->nombre }}</option>
                @endforeach
            </select>

    </td>
    <td>
        <input type="submit" value="Buscar" name="buscar" class="btn btn-secondary">
    </td>
        </form>
    </tr>
    @if(isset($libros))
    <tr class="primeraFila">

        <td colspan="2">{{ $autor->nombre }}</td>
    </tr>
    @foreach($libros as $libro)
    <tr>
        <td colspan="2">{{ $libro->titulo }}</td>
    </tr>
    @endforeach
    </ul>
@endif
</table>

@endsection