<?php
namespace App\Repositories;

use App\Models\Vehicle;
// use App\Repositories\VehicleRepositoryInterface;

class VehicleRepository
{
   
    public function showAll()
    {
        return Vehicle::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        return Vehicle::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

