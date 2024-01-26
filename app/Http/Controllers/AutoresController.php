<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autores::get();
      
        return view('autores.index', compact('autores'));
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
        $autores = new Autores();
        $autores->nombre = strtoupper($request->get('nombre'));
        $autores->nacimiento = $request->get('nacimiento');
        $autores->save();

        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autor = Autores::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $autor = Autores::findOrFail($id);
        $autor->nombre = strtoupper($request->get('nombre'));
        $autor->nacimiento = $request->get('nacimiento');

        $autor->save();

        return redirect()->route('autores.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autores::findOrFail($id)->delete();

        return redirect()->route('autores.index');


    }
}
