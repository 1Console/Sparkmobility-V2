<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketLogRequest;
use App\Http\Requests\UpdateTicketLogRequest;
use App\Models\TicketLog;

class TicketLogController extends Controller
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
     * @param  \App\Http\Requests\StoreTicketLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketLogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketLog  $ticketLog
     * @return \Illuminate\Http\Response
     */
    public function show(TicketLog $ticketLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketLog  $ticketLog
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketLog $ticketLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketLogRequest  $request
     * @param  \App\Models\TicketLog  $ticketLog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketLogRequest $request, TicketLog $ticketLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketLog  $ticketLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketLog $ticketLog)
    {
        //
    }
}
