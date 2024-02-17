<?php
namespace App\Repositories;

interface RideRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Rideid);

    public function delete($Rideid);

  
}

