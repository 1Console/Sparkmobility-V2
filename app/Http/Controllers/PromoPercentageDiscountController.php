<?php

namespace App\Http\Controllers;

use App\Models\PromoPercentageDiscount;
use App\Http\Requests\StorePromoPercentageDiscountRequest;
use App\Http\Requests\UpdatePromoPercentageDiscountRequest;
use App\Repositories\PromoPercentageDiscountRepository;

class PromoPercentageDiscountController extends Controller
{
    public function __construct(protected PromoPercentageDiscountRepository $promoPercentageDiscountRepository){}

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
        return view('modules.promos.percentage-discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoPercentageDiscountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoPercentageDiscountRequest $request)
    {
        $this->promoPercentageDiscountRepository->store($request->validated());
        return redirect()->route('promos.percentage-discount.create')->with('success','Promo percentage discount was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoPercentageDiscount  $promoPercentageDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(PromoPercentageDiscount $promoPercentageDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoPercentageDiscount  $promoPercentageDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoPercentageDiscount $promoPercentageDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoPercentageDiscountRequest  $request
     * @param  \App\Models\PromoPercentageDiscount  $promoPercentageDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoPercentageDiscountRequest $request, PromoPercentageDiscount $promoPercentageDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoPercentageDiscount  $promoPercentageDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoPercentageDiscount $promoPercentageDiscount)
    {
        //
    }
}
