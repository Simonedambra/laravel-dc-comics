<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicsRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class Comicscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
            return view('comics.create');
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicsRequest $request)
    {
        $data = $request->validated();
        
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    

    public function show(comic $comic)
    {
        
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(Comic $Comic)
    //public function destroy(string $id)
    {
        // $pasta = Pasta::findOrFail($id);

        $Comic->delete();

        return redirect()->route('comics.index');
    }
}
