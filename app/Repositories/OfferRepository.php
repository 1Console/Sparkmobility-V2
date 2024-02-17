<?php
namespace App\Repositories;

use App\Models\Offer;
// use App\Repositories\OfferRepositoryInterface;

class OfferRepository
{
   
    public function showAll()
    {
        return Offer::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return Offer::create($data);
    }

    public function update($data)
    {}

    public function delete($data)
    {}

  
}

