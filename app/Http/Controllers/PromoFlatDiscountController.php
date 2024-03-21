<?php

namespace App\Http\Controllers;

use App\Models\PromoFlatDiscount;
use App\Http\Requests\StorePromoFlatDiscountRequest;
use App\Http\Requests\UpdatePromoFlatDiscountRequest;
use App\Repositories\PromoFlatDiscountRepository;

class PromoFlatDiscountController extends Controller
{
    public function __construct(protected PromoFlatDiscountRepository $promoFlatDiscountRepository){}

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
        return view('modules.promos.flat-discount.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoFlatDiscountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoFlatDiscountRequest $request)
    {
        $this->promoFlatDiscountRepository->store($request->validated());
        return redirect()->route('promos.flat-discount.create')->with('success','Promo flat discount was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoFlatDiscount  $promoFlatDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(PromoFlatDiscount $promoFlatDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoFlatDiscount  $promoFlatDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoFlatDiscount $promoFlatDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoFlatDiscountRequest  $request
     * @param  \App\Models\PromoFlatDiscount  $promoFlatDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoFlatDiscountRequest $request, PromoFlatDiscount $promoFlatDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoFlatDiscount  $promoFlatDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoFlatDiscount $promoFlatDiscount)
    {
        //
    }
}
