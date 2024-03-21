<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Rider;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Builder;
use App\DataTables\RidersDataTable;
use App\Http\Requests\StoreRiderRequest;
use App\Http\Requests\UpdateRiderRequest;
use App\Repositories\RiderRepository;
// use Yajra\DataTables\Html\Builder;



class RiderController extends Controller
{
    public function __construct(protected RiderRepository $riderRepository){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->riderRepository->showAll()->render('modules.riders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.riders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRiderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiderRequest $request)
    {
        $this->riderRepository->store($request->validated());
        return redirect()->route('riders.create')->with('success','Rider was successfully added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRiderRequest  $request
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiderRequest $request, Rider $rider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        //
    }
}
