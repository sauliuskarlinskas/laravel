<?php

namespace App\Http\Controllers;

use App\Models\Palette;
use App\Http\Requests\StorePaletteRequest;
use App\Http\Requests\UpdatePaletteRequest;

class PaletteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('palettes.index', ['palettes' => Palette::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('palettes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaletteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Palette $palette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Palette $palette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaletteRequest $request, Palette $palette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Palette $palette)
    {
        //
    }
}
