<?php

namespace App\Http\Controllers;
use App\Models\Palette;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        Palette::create($request->all());
        return redirect()->route('palettes-index');
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
        return view('palettes.edit', ['palette' => $palette]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Palette $palette)
    {
        $palette->update($request->all());
        return redirect()->route('palettes-index');
    }

     /**
     * Confirm remove the specified resource from storage.
     */
    public function delete(Palette $palette)
    {
        return view('palettes.delete', ['palette' => $palette]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Palette $palette)
    {
        $palette->delete();
        return redirect()->route('palettes-index');
    }
}
