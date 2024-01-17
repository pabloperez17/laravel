<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bebidas = [
            ["Coca cola",2.5,"33cl"],
            ["Agua",2,"50cl"],
            ["Cerveza",3,"33cl"]
        ];

        $platos = [
            ["Tortilla de patatas",4.95,"Ración"],
            ["Chuletillas de cordero",9.95,"Ración"],
            ["Ensaladilla rusa",3.5,"Tapa"]
        ];

        return view('carta',
            ['bebidas' => $bebidas, 'platos' => $platos]);
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
