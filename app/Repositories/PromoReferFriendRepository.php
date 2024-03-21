<?php
namespace App\Repositories;

use App\Models\PromoReferFriend;
use App\Models\PromoWalletCredit;
// use App\Repositories\PromoReferFriendRepositoryInterface;

class PromoReferFriendRepository
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
        return PromoReferFriend::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

