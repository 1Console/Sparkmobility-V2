<?php
namespace App\Repositories;

interface PricingRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Pricingid);

    public function delete($Pricingid);

  
}

