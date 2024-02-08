@extends('plantilla')
@section('titulo','Nuevo libro')

@section('contenido')

<table class="insertar">
        <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <tr class="primeraFila">
        <td>Titulo</td>
        <td>Editorial</td>
        <td>Precio</td>
        <td>Autores</td>
        <td>Enviar</td>
        </tr>
        <tr>
            <td><input class="inp" placeholder="Titulo..." type="text" name="titulo"></td>
            <td><input class="inp" placeholder="Editorial..." type="text" name="editorial"></td>
            <td><input class="inp" placeholder="Precio..." type="number" step="0.01" name="precio"></td>
            <td><select name="autor">
                @foreach($autores as $autor)
                <option value="{{ $autor->id }}" name="autor">{{ $autor->nombre }}</option>
                @endforeach
                </select>
            </td>

            <td><input type="submit" value="Insertar" name="insertar" class="btn btn-secondary" ></td>
        </tr>
        </form>
    </tr>
</table>

@endsection