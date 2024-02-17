<?php
namespace App\Repositories;

use App\Models\TicketLog;
// use App\Repositories\TicketLogRepositoryInterface;

class TicketLogRepository
{
   
    public function showAll()
    {
        return TicketLog::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return TicketLog::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

