<?php
namespace App\Repositories;

interface PromoFreeRideRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PromoFreeRideid);

    public function delete($PromoFreeRideid);

  
}

