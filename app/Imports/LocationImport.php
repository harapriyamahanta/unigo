<?php

namespace App\Imports;

use App\Models\Location;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
//use Maatwebsite\Excel\Concerns\ToCollection
use Maatwebsite\Excel\Concerns\ToModel;

class LocationImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
    //dd($rows);    
    foreach ($rows as $row)
        {
                $location = new Location();
                $location->address = isset($row['locality_town']) ? $row['locality_town'] :'';
                $location->city = $row['district'];
                $location->pincode = $row['pin_code'];
                //dd($location);
                $location->save();
        }
    }
}