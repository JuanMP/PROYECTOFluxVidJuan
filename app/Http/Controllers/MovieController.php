<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Director;

//ACT 13
use App\Http\Requests\MovieRequest;

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
         //return view('movies.create');
         //ACT 12
         $directors = Director::All();
         return view('movies.create', compact('directors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MovieRequest $request)
    {
        //ACT 12
        $movie = new Movie();
        $movie->title = $request->get('title');
        $movie->slug = Str::slug($movie->title);
        $movie->year = $request->get('year');
        $movie->plot = $request->get('plot');
        $movie->rating = $request->get('rating');
        $movie->visibility = $request->has('visibility') ? 1 : 0;
        $movie->director()->associate(Director::findOrFail($request->get('director')));
        $movie->save();

        return view('movies.stored', compact('movie'));
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

        //MODIFICADO
        //$movie = Movie::findOrFail($id); YA NO ES NECESARIO DESPUES DE MCR
        //return view('movies.edit', compact('movie'));
        //ACT 12
        $directors = Director::All();
        return view('movies.edit', compact('movie', 'directors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MovieRequest $request, Movie $movie)
    {

        //ACT 12
        $movie->title = $request->get('title');
        $movie->slug = Str::slug($movie->title);
        $movie->year = $request->get('year');
        $movie->plot = $request->get('plot');
        $movie->rating = $request->get('rating');
        $movie->visibility = $request->has('visibility') ? 1 : 0;
        $movie->director()->associate(Director::findOrFail($request->get('director')));
        $movie->save();

        return view('movies.edited', compact('movie'));
    }
        /*
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
        */



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
