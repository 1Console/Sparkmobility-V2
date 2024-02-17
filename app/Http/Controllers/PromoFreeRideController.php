<?php

namespace App\Http\Controllers;

use App\Models\PromoFreeRide;
use App\Repositories\FleetRepository;
use App\Http\Requests\StorePromoFreeRideRequest;
use App\Http\Requests\UpdatePromoFreeRideRequest;
use App\Repositories\PromoFreeRideRepository;

class PromoFreeRideController extends Controller
{
    public function __construct(protected PromoFreeRideRepository $promoFreeRideRepository,
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
    public function create()
    {
        $fleets = $this->fleetRepository->showAll();
        return view('modules.promos.free-rides.create',compact('fleets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoFreeRideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoFreeRideRequest $request)
    {
        $this->promoFreeRideRepository->store($request->validated());
        return redirect()->route('promos.free-rides.create')->with('success','Promo free ride was successfully added');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoFreeRide  $promoFreeRide
     * @return \Illuminate\Http\Response
     */
    public function show(PromoFreeRide $promoFreeRide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoFreeRide  $promoFreeRide
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoFreeRide $promoFreeRide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoFreeRideRequest  $request
     * @param  \App\Models\PromoFreeRide  $promoFreeRide
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoFreeRideRequest $request, PromoFreeRide $promoFreeRide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoFreeRide  $promoFreeRide
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoFreeRide $promoFreeRide)
    {
        //
    }
}
