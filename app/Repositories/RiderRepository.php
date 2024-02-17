<?php
namespace App\Repositories;

use App\Models\Rider;
use App\DataTables\RidersDataTable;
// use App\Repositories\RiderRepositoryInterface;

class RiderRepository
{
   
    public function showAll()
    {   
        return (new RidersDataTable());
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['user_id'] = auth()->id();
        $data['status'] = 'Pending';
        return Rider::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

