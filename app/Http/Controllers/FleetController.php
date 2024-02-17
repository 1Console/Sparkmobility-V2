<?php

namespace App\Http\Controllers;

use App\Models\Fleet;
use App\Models\Vehicle;
use App\Models\FleetVehicle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use App\Repositories\FleetRepository;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreFleetRequest;
use App\Http\Requests\UpdateFleetRequest;


class FleetController extends Controller
{
    public function __construct(protected FleetRepository $fleetRepository){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      return $this->fleetRepository->showAll()->render('modules.fleets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('modules.fleets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFleetRequest  $request
     * @return \Illuminate\Http\Response
     */

   
    public function store(StoreFleetRequest $request): RedirectResponse
    {
        $this->fleetRepository->store($request->validated());  
        return redirect()->route('fleets.index')->with('success','Fleet was successfully added');
    }

    
    public function createAssignVehicles($fleet)
    {

        $fleet = Fleet::find($fleet); // TODO: revamp
        $vehicles = Vehicle::all(); // TODO: revamp
        return view('modules.fleets.assign-vehicles',compact('fleet','vehicles'));
    }

    
    //TODO: create store request
    public function storeAssignVehicles(Request $request,$id): RedirectResponse
    {
        // dd($request->all()['vehicles']);
        // dd($id);
        $fleet = Fleet::find($id);
        $vehiclesToAssign = $request->all()['vehicles'];
        foreach($vehiclesToAssign as $vehicle){
            $fleetVehicle = FleetVehicle::where('vehicle_id',$vehicle)->first();
            
            //delete if vehicle is assigned to any fleet
            if($fleetVehicle){
               $fleetVehicle->delete();
            } 

            FleetVehicle::create([
                'fleet_id' => $id,
                'vehicle_id' => $vehicle,
                'user_id' => auth()->id()
            ]);
            
        }
        // $this->fleetRepository->storeAssignVehicles($request->validated());  
        return back()->with('success','Vehicles were successfully assigned to fleet');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function show(Fleet $fleet)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function edit(Fleet $fleet): View
    {  
        // ->compact('data',$fleet)
        return view('modules.fleets.edit',compact('fleet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFleetRequest  $request
     * @param  \App\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFleetRequest $request, Fleet $fleet): RedirectResponse
    {
        // dd($request->validated()['admin_type']);
        $this->fleetRepository->update($request->validated(),$fleet);  
        return redirect()->route('fleets.index')->with('success','Fleet was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fleet  $fleet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fleet $fleet)
    {
        //
    }
}
