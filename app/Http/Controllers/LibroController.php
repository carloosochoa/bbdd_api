<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
    public function __invoke(){
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::get();
        $autores = Autor::get();

        return view('libros.index', compact('libros', 'autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libros = new Libro();
        $libros->titulo = $request->get('titulo');
        $libros->editorial = $request->get('editorial');
        $libros->precio = $request->get('precio');
        $libros->autor_id = $request->get('autor');
        $libros->save();

        return redirect()->route('libros.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review=$libros[$id];
        return view('libros.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $libros = Libro::findOrFail($id);
        $autores = Autor::get();

        return view('libros.edit', compact('libros', 'autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->autor_id = $request->get('autor');

        $libro->save();

        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Libro::findOrFail($id)->delete();

        return redirect()->route('libros.index');
    }

    public function nuevo()
    {
        $autores = Autor::get();

        return view('libros.nuevo', compact('autores'));
    }

    public function paginaFiltro()
    {
        $autores = Autor::get();

        return view('libros.paginaFiltro', compact('autores'));
    }

    public function filtrar(Request $request)
    {
        $autores = Autor::get();
        $id = $request->get('autor');
        $libros = Libro::where('autor_id',"=",$id)->get();
        $autor = Autor::where('id',"=",$id)->get();

        return view("libros.paginaFiltro", compact('libros','autores','autor'));
    }

    public function mostrarLibros() {
        return Libro::all();
    }

    public function libroPorAutor(string $id){
        $autores = Autor::get();
        $libros = Libro::where('autor_id',"=",$id)->get();

    }
}
