<?php

namespace App\Http\Controllers;

use App\Models\Camiones;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    
    public function index()
    {
        $camione=Camiones::all();
        // $marcas="asdasd";
        return view('welcome',compact('camione'));
    }

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
    public function show(Camiones $camion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camiones $camion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camiones $camion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camiones $camion)
    {
        //
    }
}
