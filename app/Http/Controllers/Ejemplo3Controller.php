<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ejemplo3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Estas en la funcion index, inicio del sitio o cualquier acción";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Estas en la funcion create con parámetro id: ";
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
