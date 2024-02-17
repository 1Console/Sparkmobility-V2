<?php
namespace App\Repositories;

interface FleetRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($data);

    public function delete($data);

  
}

