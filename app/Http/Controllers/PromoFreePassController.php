<?php

namespace App\Http\Controllers;

use App\Models\PromoFreePass;
use App\Repositories\PromoFreePassRepository;
use App\Http\Requests\StorePromoFreePassRequest;
use App\Http\Requests\UpdatePromoFreePassRequest;


class PromoFreePassController extends Controller
{
    public function __construct(protected PromoFreePassRepository $promoFreePassRepository){}
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
        return view('modules.promos.free-pass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoFreePassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoFreePassRequest $request)
    {
        $this->promoFreePassRepository->store($request->validated());
        return redirect()->route('promos.free-pass.create')->with('success','Promo free pass was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoFreePass  $promoFreePass
     * @return \Illuminate\Http\Response
     */
    public function show(PromoFreePass $promoFreePass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoFreePass  $promoFreePass
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoFreePass $promoFreePass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoFreePassRequest  $request
     * @param  \App\Models\PromoFreePass  $promoFreePass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoFreePassRequest $request, PromoFreePass $promoFreePass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoFreePass  $promoFreePass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoFreePass $promoFreePass)
    {
        //
    }
}
