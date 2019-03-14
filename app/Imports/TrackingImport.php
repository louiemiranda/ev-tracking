<?php

namespace App\Imports;

use App\Tracking;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class TrackingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tracking([
            'reference_code'    => $row[0],
            'delivery_date'     => $row[1]
        ]);
    }
}
