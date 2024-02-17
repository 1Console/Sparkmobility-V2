<?php
namespace App\Repositories;

use App\Models\PromoFlatDiscount;
// use App\Repositories\PromoFlatDiscountRepositoryInterface;

class PromoFlatDiscountRepository
{
   
    public function showAll()
    {
        return PromoFlatDiscount::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['user_id'] = auth()->id();
        return PromoFlatDiscount::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

