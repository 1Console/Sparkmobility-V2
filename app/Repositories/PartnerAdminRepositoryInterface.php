<?php
namespace App\Repositories;

interface PartnerAdminRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PartnerAdminid);

    public function delete($PartnerAdminid);

  
}

