<?php
namespace App\Repositories;

interface VehicleRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Vehicleid);

    public function delete($Vehicleid);

  
}

