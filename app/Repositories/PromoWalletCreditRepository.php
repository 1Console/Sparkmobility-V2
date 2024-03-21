<?php
namespace App\Repositories;

use App\Models\PromoWalletCredit;
// use App\Repositories\PromoWalletCreditRepositoryInterface;

class PromoWalletCreditRepository
{
   
    public function showAll()
    {
        return PromoWalletCredit::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['user_id'] = auth()->id();
        return PromoWalletCredit::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

