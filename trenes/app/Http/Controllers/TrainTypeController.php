<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;
use App\Models\Train;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainTypes =TrainType::all();
        return view('trainTypes/index',['trainTypes'=>$trainTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainTypes/create', ['trainTypes' => TrainType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new TrainType;
        $type->type = $request->input('type');
        $type->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('trainTypes/show', ['trainType' => TrainType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('trainTypes/edit', ['trainType' => TrainType::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainType = TrainType::find($id);

        $trainType->type = $request->input('type');
        $trainType->save();

        return redirect('trainTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TrainType::find($id)->delete();
        return redirect('trainTypes');
    }
}
