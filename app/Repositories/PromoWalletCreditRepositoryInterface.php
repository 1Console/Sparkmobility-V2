<?php
namespace App\Repositories;

interface PromoWalletCreditRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($PromoWalletCreditid);

    public function delete($PromoWalletCreditid);

  
}

