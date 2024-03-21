<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\TrekkAdmin;
use Illuminate\Support\Facades\Hash;
// use App\Repositories\TrekkAdminRepositoryInterface;

class TrekkAdminRepository
{
   
    public function showAll()
    {
        return TrekkAdmin::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        $data['last_connection'] = date('Y-m-d H:i:s');
        $trekkAdmin = TrekkAdmin::create($data);
        
        $userData['name'] = $trekkAdmin->name;
        $userData['email'] = $trekkAdmin->email;
        $userData['userable_id'] = $trekkAdmin->id;
        $userData['userable_type'] = TrekkAdmin::class;
        $userData['password'] = Hash::make('password');
        $userCreation = User::create($userData);

        return $trekkAdmin;
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

    public function filterTrekkAdmin($admin_type)
    {
        if($admin_type == 'trekk'){
            // return TrekkAdmin::get();
            return response()->json([
                'status' => true,
                'data' => TrekkAdmin::get()
             ]);
        }else{
            return [];
        }
    }

  
}

