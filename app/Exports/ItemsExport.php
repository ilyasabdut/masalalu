<?php

namespace App\Exports;

use App\Item;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ItemsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
       use Exportable;

    public function query()
    {
        return Item::query();
    }

    public function headings(): array
    {
        return ['id','code','name','category_id','price','image','tax','tax_method','quantity','barcode_symbology','type','alert_quantity','comment','discount','store_price','qty','real_unit_price','unit_price','status'];
    }

}
