<?php

namespace App\Imports;

use App\Models\Mobil;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportMobil implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mobil([
            'id'     => $row[0],
            'nama'    => $row[1],
            'image'     => $row[0],
        ]);
    }
}
