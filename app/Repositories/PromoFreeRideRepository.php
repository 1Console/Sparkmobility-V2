<?php
namespace App\Repositories;

use App\Models\PromoFreeRide;
// use App\Repositories\PromoFreeRideRepositoryInterface;

class PromoFreeRideRepository
{
   
    public function showAll()
    {
        return PromoFreeRide::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        return PromoFreeRide::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

