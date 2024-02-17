<?php
namespace App\Repositories;

interface PromoPercentageDiscountRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PromoPercentageDiscountid);

    public function delete($PromoPercentageDiscountid);

  
}

