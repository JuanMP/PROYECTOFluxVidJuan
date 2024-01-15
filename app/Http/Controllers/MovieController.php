<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //MODIFICADO
        //ACT7 $movies = Movie::all();
        //ACT7b
        $movies = Movie::where('visibility', 1)->paginate(6);
        return view('movies.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         //MODIFICADO
         return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
        if($movie->visibility==0){
        return redirect()->route('movies.index');
        }
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
        //MODIFICADO
        //$movie = Movie::findOrFail($id); YA NO ES NECESARIO DESPUES DE MCR
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
        //Valida los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'plot' => 'required|string',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        //Recupera la película desde la base de datos
        //$movie = Movie::findOrFail($id);

        //Actualiza los campos de la película
        $movie->update([
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'plot' => $request->input('plot'),
            'rating' => $request->input('rating'),
        ]);

        //Redirecciona a la vista de detalles de la película
        return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
        //ACT 9
        //Movie::findOrFail($id)->delete(); YA NO ES NECESARIO DESPUES DE MCR
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
