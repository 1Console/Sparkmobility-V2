<?php
namespace App\Repositories;

interface TrekkAdminRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($TrekkAdminid);

    public function delete($TrekkAdminid);

  
}

