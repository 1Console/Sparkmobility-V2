<?php
namespace App\Repositories;

use App\Models\PromoFreePass;
// use App\Repositories\PromoFreePassRepositoryInterface;

class PromoFreePassRepository
{
   
    public function showAll()
    {
        return PromoFreePass::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['user_id'] = auth()->id();
        return PromoFreePass::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

