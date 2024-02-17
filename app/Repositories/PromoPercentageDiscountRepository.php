<?php
namespace App\Repositories;

use App\Models\PromoPercentageDiscount;
// use App\Repositories\PromoPercentageDiscountRepositoryInterface;

class PromoPercentageDiscountRepository
{
   
    public function showAll()
    {
        return PromoPercentageDiscount::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['user_id'] = auth()->id();
        return PromoPercentageDiscount::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

