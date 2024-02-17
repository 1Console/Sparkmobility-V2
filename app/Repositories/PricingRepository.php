<?php
namespace App\Repositories;

use App\Models\Pricing;
use App\DataTables\PricingsDataTable;
// use App\Repositories\PricingRepositoryInterface;

class PricingRepository
{
   
    public function showAll()
    {
        return (new PricingsDataTable());
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        return Pricing::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

