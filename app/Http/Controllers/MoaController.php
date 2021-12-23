<?php

namespace App\Http\Controllers;

use App\Models\Moa;
use App\Http\Requests\StoreMoaRequest;
use App\Http\Requests\UpdateMoaRequest;

class MoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/moa/index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/moa/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMoaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMoaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moa  $moa
     * @return \Illuminate\Http\Response
     */
    public function show(Moa $moa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moa  $moa
     * @return \Illuminate\Http\Response
     */
    public function edit(Moa $moa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMoaRequest  $request
     * @param  \App\Models\Moa  $moa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMoaRequest $request, Moa $moa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moa  $moa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moa $moa)
    {
        //
    }
}