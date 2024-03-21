<?php
namespace App\Repositories;

use App\Models\CommandList;
// use App\Repositories\CommandListRepositoryInterface;

class CommandListRepository
{
   
    public function showAll()
    {
        return CommandList::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return CommandList::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

