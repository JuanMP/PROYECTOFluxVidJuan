<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ACT 6
        //return view('directors.index');
        //ACT 8
        $directors = Director::all();
        return view('directors.index', compact('directors'));

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //ACT6
        //return view('directors.show');
        //return view('directors.show', compact('id'));
        //ACT 11
        return view('directors.show', compact('director'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        //
    }

    public function getDirectorsFromNationality($country)
    {
        $directors = Director::where('nationality', $country)->get();
        return view('directors.nationality', compact('country', 'directors'));
    }
}
