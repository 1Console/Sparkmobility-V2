<?php

namespace App\Http\Controllers;

use App\Models\PartnerAdmin;
use App\Repositories\FleetRepository;
use App\Repositories\PartnerAdminRepository;
use App\Http\Requests\StorePartnerAdminRequest;
use App\Http\Requests\UpdatePartnerAdminRequest;

class PartnerAdminController extends Controller
{
    public function __construct(protected PartnerAdminRepository $partnerAdminRepository,
    protected FleetRepository $fleetRepository){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fleets = $this->fleetRepository->showAll();
        return view('modules.partner-admins.create',compact('fleets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnerAdminRequest $request)
    {
          // dd($request->fleet_id);
        $this->partnerAdminRepository->store($request->validated());
        return redirect()->route('partner-admins.create')->with('success','Partner Admin was successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(PartnerAdmin $partnerAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PartnerAdmin $partnerAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerAdminRequest $request, PartnerAdmin $partnerAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartnerAdmin $partnerAdmin)
    {
        //
    }

    public function filterPartnerAdmin($admin_type)
    {
        return $this->partnerAdminRepository->filterPartnerAdmin($admin_type);
    }
}
