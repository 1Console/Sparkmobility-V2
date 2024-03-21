<?php

namespace App\Http\Controllers;

use App\Models\PromoWalletCredit;
use App\Http\Requests\StorePromoWalletCreditRequest;
use App\Http\Requests\UpdatePromoWalletCreditRequest;
use App\Repositories\PromoWalletCreditRepository;

class PromoWalletCreditController extends Controller
{
    public function __construct(protected PromoWalletCreditRepository $promoWalletCreditRepository){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.promos.wallet-credit.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoWalletCreditRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoWalletCreditRequest $request)
    {
        $this->promoWalletCreditRepository->store($request->validated());
        return redirect()->route('promos.wallet-credit.create')->with('success','Promo wallet credit was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoWalletCredit  $promoWalletCredit
     * @return \Illuminate\Http\Response
     */
    public function show(PromoWalletCredit $promoWalletCredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoWalletCredit  $promoWalletCredit
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoWalletCredit $promoWalletCredit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoWalletCreditRequest  $request
     * @param  \App\Models\PromoWalletCredit  $promoWalletCredit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoWalletCreditRequest $request, PromoWalletCredit $promoWalletCredit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoWalletCredit  $promoWalletCredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoWalletCredit $promoWalletCredit)
    {
        //
    }
}
