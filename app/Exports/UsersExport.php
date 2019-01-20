<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
       use Exportable;

    public function query()
    {
        return User::query();
    }

    public function headings(): array
    {
        return [
            'id',
            'Username',
            'name',
            'email',
            'created_at',
            'updated_at'
        ];
    }

}
