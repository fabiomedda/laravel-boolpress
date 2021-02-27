<?php

namespace App\Http\Controllers;

use App\Categorytwo;
use Illuminate\Http\Request;

class CategorytwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Categorytwo::latest()->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Validare i dati
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',            
        ]);

        Categorytwo::create($validatedData);

        $new_post = Categorytwo::orderby('id', 'desc')->first();

        return redirect()->route('categories.index', $new_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorytwo  $categorytwo
     * @return \Illuminate\Http\Response
     */
    public function show(Categorytwo $category)
    {
        $cat = $category;
        return view('categories.show', compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorytwo  $categorytwo
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorytwo $category)
    {
        //
        $cat = $category;
        return view('categories.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorytwo  $categorytwo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorytwo $category)
    {

        // Validare i dati
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required',
        ]);

        $category->update($validatedData);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorytwo  $categorytwo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorytwo $category)
    {
        //
        $category->delete();

        return redirect()->route('categories.index');
    }
}
