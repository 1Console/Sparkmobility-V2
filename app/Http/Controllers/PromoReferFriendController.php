<?php

namespace App\Http\Controllers;

use App\Models\PromoReferFriend;
use App\Repositories\FleetRepository;
use App\Repositories\FleetRepositoryInterface;
use App\Repositories\PromoReferFriendRepository;
use App\Http\Requests\StorePromoReferFriendRequest;
use App\Http\Requests\UpdatePromoReferFriendRequest;

class PromoReferFriendController extends Controller
{
    public function __construct(protected PromoReferFriendRepository $promoReferFriendRepository,
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
        return view('modules.promos.refer-friend.create',compact('fleets'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePromoReferFriendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePromoReferFriendRequest $request)
    {
        $this->promoReferFriendRepository->store($request->validated());
        return redirect()->route('promos.refer-friend.create')->with('success','Promo refer friend was successfully added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PromoReferFriend  $promoReferFriend
     * @return \Illuminate\Http\Response
     */
    public function show(PromoReferFriend $promoReferFriend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PromoReferFriend  $promoReferFriend
     * @return \Illuminate\Http\Response
     */
    public function edit(PromoReferFriend $promoReferFriend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePromoReferFriendRequest  $request
     * @param  \App\Models\PromoReferFriend  $promoReferFriend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePromoReferFriendRequest $request, PromoReferFriend $promoReferFriend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PromoReferFriend  $promoReferFriend
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromoReferFriend $promoReferFriend)
    {
        //
    }
}
