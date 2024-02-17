<?php

namespace App\Imports;

use App\Models\Vehicle;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportVehicle implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows)
    {
        // return new Vehicle([
        //     'type' => $row['type'],
        //     'vehicle_number' => $row['vehicle_number'],
        //     'description' => $row['description'],
        //     'mac_id' => $row['mac_id'],
        //     'imei' => $row['imei'],
        //     'location' => $row['location'],
        //     'availability_status' => $row['availability_status'],
        //     'qr_image_path' => 'image.png',
        //     'flags' => 'outofcoverage',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        Validator::make($rows->toArray(), [
             '*.imei' => 'required|unique:vehicles|integer',
             '*.vehicle_number' => 'required|integer',
         ])->validate();
  
        foreach ($rows as $row) {
            Vehicle::create([
                'type' => $row['type'],
                'vehicle_number' => $row['vehicle_number'],
                'description' => $row['description'],
                'mac_id' => $row['mac_id'],
                'imei' => $row['imei'],
                'location' => $row['location'],
                'availability_status' => $row['availability_status'],
                'qr_image_path' => 'image.png',
                'flags' => 'outofcoverage',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }

    // public function rules(): array
    // {
    //     return [
    //         'imei' => 'required|digits:14|string',
    //         'vehicle_number' => 'required|integer',
    //     ];
    // }

    /**
     * @return array
     */
    public function customValidationMessages()
    {
        return [
            '*.imei.digits:14' => ':attribute must be 14 digits',
            '*.imei.required' => ':attribute is required',
            '*.vehicle_number.required' => ':attribute is required',
        ];
    }
}
