<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([  
            'id'  => $row[0],
            'username' => $row[1],
            'name' => $row[2],
            'email' => $row[3],
            'password' => Hash::make($row[4]),
            'position' => $row[5],
            
        ]);
    }
}
