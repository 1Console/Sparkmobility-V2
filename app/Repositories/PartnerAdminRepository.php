<?php
namespace App\Repositories;

use App\Models\User;
use App\Models\PartnerAdmin;
use Illuminate\Support\Facades\Hash;
class PartnerAdminRepository
{
   
    public function showAll()
    {
        return PartnerAdmin::all();
    }

    public function showOne($data)
    {}

    public function store($data)
    {
        
        $data['last_connection'] = date('Y-m-d H:i:s');
        $partnerAdmin = PartnerAdmin::create($data);
        
        $userData['name'] = $partnerAdmin->company_name;
        $userData['email'] = $partnerAdmin->company_email;
        $userData['userable_id'] = $partnerAdmin->id;
        $userData['userable_type'] = PartnerAdmin::class;
        $userData['password'] = Hash::make('password');
        $userCreation = User::create($userData);

        return $partnerAdmin;
    }

    public function update($bannerid)
    {}

    public function delete($bannerid)
    {}

    public function filterPartnerAdmin($admin_type)
    {
        if($admin_type == 'partner'){
             return response()->json([
                'status' => true,
                'data' => PartnerAdmin::get()
             ]);
            
        }else{
            return [];
        }
    }

  
}

