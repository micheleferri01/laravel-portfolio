<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typology;
use Illuminate\Http\Request;

class typologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typologies = Typology::all();
        return view('typologies.index', compact('typologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('typologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTypology = new Typology();
        $newTypology->name = $data['name'];
        $newTypology->description = $data['description'];
        $newTypology->save();

        return redirect()->route('typologies.show', $newTypology);
    }

    /**
     * Display the specified resource.
     */
    public function show(Typology $typology)
    {
        return view('typologies.show', compact('typology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Typology $typology)
    {
        return view('typologies.edit', compact('typology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Typology $typology)
    {
        $data = $request->all();

        $typology->name = $data['name'];
        $typology->description = $data['description'];
        $typology->update();

        return redirect()->route('typologies.show', compact('typology'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Typology $typology)
    {
        $typology->delete();

        return redirect()->route('typologies.index');
    }
}
