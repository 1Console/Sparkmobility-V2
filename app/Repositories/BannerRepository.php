<?php
namespace App\Repositories;

use App\Models\Banner;
// use App\Repositories\BannerRepositoryInterface;

class BannerRepository
{
   
    public function showAll()
    {
        return Banner::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return Banner::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

