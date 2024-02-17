<?php
namespace App\Repositories;

interface OfferRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Offerid);

    public function delete($Offerid);

  
}

