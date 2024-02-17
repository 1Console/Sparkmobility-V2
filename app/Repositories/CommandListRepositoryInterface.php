<?php
namespace App\Repositories;

interface CommandListRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Commandlistid);

    public function delete($Commandlistid);

  
}

