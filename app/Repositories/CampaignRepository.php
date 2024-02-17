<?php
namespace App\Repositories;

use App\Models\Campaign;
// use App\Repositories\CampaignRepositoryInterface;

class CampaignRepository
{
   
    public function showAll()
    {
        return Campaign::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        return Campaign::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

