<?php
namespace App\Repositories;

use App\Models\Ticket;
// use App\Repositories\TicketRepositoryInterface;

class TicketRepository
{
   
    public function showAll()
    {
        return Ticket::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['image_path'] = 'newImagePath';
        return Ticket::create($data);
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

  
}

