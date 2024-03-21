<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Imports\ImportVehicle;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Repositories\FleetRepository;
use Illuminate\Http\RedirectResponse;
use App\Repositories\VehicleRepository;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;


class VehicleController extends Controller
{
    public function __construct(protected VehicleRepository $vehicleRepository,
    protected FleetRepository $fleetRepository){}
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
    public function create() : View
    {
        $vehicle_types = config('enums.vehicle_types');
        $fleets = $this->fleetRepository->getData();
        return view('modules.vehicles.create', compact('vehicle_types','fleets') );
    }


    /**
     * Show the form for  bulk creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batchCreateVehicle() : View
    {
        return view('modules.vehicles.batch-create');
    }


    /**
     * Show the form for  batch storing a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function batchStoreVehicle(Request $request) : RedirectResponse
    {       
            Excel::import(new ImportVehicle, $request->file('vehicles_import')->store('vehicles_import')); //TODO
            return back()->with('success','Vehicles were successfully added');
    
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVehicleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleRequest $request) : RedirectResponse
    {
        $this->vehicleRepository->store($request->validated());
        return redirect()->route('vehicles.create')->with('success','Vehicle was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVehicleRequest  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
