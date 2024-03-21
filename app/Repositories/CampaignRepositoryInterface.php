<?php
namespace App\Repositories;

interface CampaignRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($Campaignid);

    public function delete($Campaignid);

  
}

