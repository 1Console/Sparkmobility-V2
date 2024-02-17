<?php
namespace App\Repositories;

interface PromoFreePassRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PromoFreePassid);

    public function delete($PromoFreePassid);

  
}

