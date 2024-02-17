<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRidelogRequest;
use App\Http\Requests\UpdateRidelogRequest;
use App\Models\Ridelog;

class RidelogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreRidelogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRidelogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ridelog  $ridelog
     * @return \Illuminate\Http\Response
     */
    public function show(Ridelog $ridelog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ridelog  $ridelog
     * @return \Illuminate\Http\Response
     */
    public function edit(Ridelog $ridelog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRidelogRequest  $request
     * @param  \App\Models\Ridelog  $ridelog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRidelogRequest $request, Ridelog $ridelog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ridelog  $ridelog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ridelog $ridelog)
    {
        //
    }
}
