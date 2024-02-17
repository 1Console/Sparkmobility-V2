<?php
namespace App\Repositories;

use App\Models\Ride;
// use App\Repositories\RideRepositoryInterface;

class RideRepository
{
   
    public function showAll()
    {
        return Ride::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return Ride::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

