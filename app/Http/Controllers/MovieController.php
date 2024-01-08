<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//añadir ACT7
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function show(string $id)
    {
        //FALTA DEVOLVER VISTA
        return view('movies.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //MODIFICADO
        return view('movies.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
