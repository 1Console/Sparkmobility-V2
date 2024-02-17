<?php
namespace App\Repositories;

use App\Models\Fleet;
use App\Models\TrekkAdmin;
use App\Models\FleetVehicle;
use App\Models\PartnerAdmin;
use App\DataTables\FleetsDataTable;
// use App\Repositories\FleetRepositoryInterface;

class FleetRepository
{
   
    public function showAll()
    {
        return (new FleetsDataTable());
    }

    public function getData()
    {
        return Fleet::all();
    }


    public function showOne($id)
    {
        return Fleet::find($id);
    }


    public function store($data)
    {
        $data['user_id'] = auth()->id();
        $data['administrator_type'] = $data['admin_type'] == 'trekk' ? TrekkAdmin::class : PartnerAdmin::class;
        
        // TODO: log stuffs
        return Fleet::create($data);
    }

    public function storeAssignVehicles($data)
    {
        $data['fleet_id'] = auth()->id();
        $data['vehicle_id'] = auth()->id();
        $data['administrator_type'] = $data['admin_type'] == 'trekk' ? TrekkAdmin::class : PartnerAdmin::class;
        
        // TODO: log stuffs
        return FleetVehicle::create($data);
    }

    

    public function update($data, $fleet)
    {
        $data['user_id'] = auth()->id();
        $data['administrator_type'] = $data['admin_type'] == 'trekk' ? TrekkAdmin::class : PartnerAdmin::class;
        
        unset($data['admin_type']);
        
        // TODO: log stuffs
        return $fleet->update($data);
    }

    public function delete($id)
    {}

  
}

