<?php

namespace App\Http\Controllers;

use App\Models\TrekkAdmin;
use App\Repositories\FleetRepository;
use App\Repositories\TrekkAdminRepository;
use App\Http\Requests\StoreTrekkAdminRequest;
use App\Http\Requests\UpdateTrekkAdminRequest;

class TrekkAdminController extends Controller
{
    public function __construct(protected TrekkAdminRepository $trekkAdminRepository,
    protected FleetRepository $fleetRepository ){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fleets = $this->fleetRepository->showAll();
        return view('modules.trekk-admins.create',compact('fleets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrekkAdminRequest $request)
    {
        // dd($request->fleet_id);
        $this->trekkAdminRepository->store($request->validated());
        return redirect()->route('trekk-admins.create')->with('success','Trekk Admin was successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(TrekkAdmin $trekkAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrekkAdmin $trekkAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrekkAdminRequest $request, TrekkAdmin $trekkAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrekkAdmin $trekkAdmin)
    {
        //
    }

    public function filterTrekkAdmin($admin_type)
    {
        return $this->trekkAdminRepository->filterTrekkAdmin($admin_type);
    }

    
}
