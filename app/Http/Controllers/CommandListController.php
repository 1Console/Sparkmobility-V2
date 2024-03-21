<?php

namespace App\Http\Controllers;

use App\Models\CommandList;
use App\Http\Requests\StoreCommandListRequest;
use App\Http\Requests\UpdateCommandListRequest;
use App\Repositories\CommandListRepository;

class CommandListController extends Controller
{
    public function __construct(protected CommandListRepository $commandListRepository)
    {}

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
        return view('modules.marketing.campaigns.create',compact('notifications','riders'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommandListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommandListRequest $request)
    {
        $this->commandListRepository->store($request->validated());
        return redirect()->route('marketing.campaigns.create')->with('success','Campaign was successfully added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommandList  $commandList
     * @return \Illuminate\Http\Response
     */
    public function show(CommandList $commandList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommandList  $commandList
     * @return \Illuminate\Http\Response
     */
    public function edit(CommandList $commandList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommandListRequest  $request
     * @param  \App\Models\CommandList  $commandList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommandListRequest $request, CommandList $commandList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommandList  $commandList
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommandList $commandList)
    {
        //
    }
}
