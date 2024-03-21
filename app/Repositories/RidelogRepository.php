<?php
namespace App\Repositories;

use App\Models\Ridelog;
// use App\Repositories\RidelogRepositoryInterface;

class RidelogRepository
{
   
    public function showAll()
    {
        return Ridelog::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return Ridelog::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

