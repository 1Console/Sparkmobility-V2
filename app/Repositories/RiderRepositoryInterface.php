<?php
namespace App\Repositories;

interface RiderRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($RiderLogid);

    public function delete($RiderLogid);

  
}

