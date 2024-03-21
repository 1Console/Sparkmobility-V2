<?php
namespace App\Repositories;

interface PromoFlatDiscountRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PromoFlatDiscountid);

    public function delete($PromoFlatDiscountid);

  
}

