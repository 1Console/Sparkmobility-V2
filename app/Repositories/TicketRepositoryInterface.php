<?php
namespace App\Repositories;

interface TicketRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Ticketid);

    public function delete($Ticketid);

  
}

