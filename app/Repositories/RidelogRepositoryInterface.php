<?php
namespace App\Repositories;

interface RidelogRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Ridelogid);

    public function delete($Ridelogid);

  
}

