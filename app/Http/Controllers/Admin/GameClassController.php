<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\GameClass;
use App\Http\Requests\StoreGameClassRequest;
use App\Http\Requests\UpdateGameClassRequest;

class GameClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameClass  $gameClass
     * @return \Illuminate\Http\Response
     */
    public function show(GameClass $gameClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameClass  $gameClass
     * @return \Illuminate\Http\Response
     */
    public function edit(GameClass $gameClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameClassRequest  $request
     * @param  \App\Models\GameClass  $gameClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameClassRequest $request, GameClass $gameClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameClass  $gameClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameClass $gameClass)
    {
        //
    }
}
