<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Http\Requests\StorePricingRequest;
use App\Http\Requests\UpdatePricingRequest;
use App\Repositories\FleetRepository;
use App\Repositories\PricingRepository;

class PricingController extends Controller
{
    public function __construct(protected PricingRepository $pricingRepository,
    protected FleetRepository $fleetRepository){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->pricingRepository->showAll()->render('modules.pricing-plans.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fleets = $this->fleetRepository->showAll();
        return view('modules.pricing-plans.create',compact('fleets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePricingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePricingRequest $request)
    {
        $this->pricingRepository->store($request->validated());
        return redirect()->route('pricing-plans.create')->with('success','Pricing plan was successfully added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePricingRequest  $request
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePricingRequest $request, Pricing $pricing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        //
    }
}
