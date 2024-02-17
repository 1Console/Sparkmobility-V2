<?php
namespace App\Repositories;

interface TicketLogRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($TicketLogid);

    public function delete($TicketLogid);

  
}

