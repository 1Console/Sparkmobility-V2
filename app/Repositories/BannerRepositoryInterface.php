<?php
namespace App\Repositories;

interface BannerRepositoryInterface
{

    public function showAll();

    public function showOne($data);
    
    public function store($data);

    public function update($bannerid);

    public function delete($bannerid);


  
}

