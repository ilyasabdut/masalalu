<?php

namespace App\Imports;

use App\Item;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; //TAMBAHKAN CODE INI


class ItemsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Item([
            'id'  => $row['id'],
            'code'  => $row['code'],
            'name'  => $row['name'],
            'category_id'  => $row['category_id'],
            'price'  => $row['price'],
            'image'  => $row['image'],
            'tax'  => $row['tax'],
            'tax_method'  => $row['tax_method'],
            'quantity'  => $row['quantity'],
            'barcode_symbology'  => $row['barcode_symbology'],
            'type'  => $row['type'],
            'alert_quantity'  => $row['alert_quantity'],
            'comment'  => $row['comment'],
            'discount'  => $row['discount'],
            'store_price'  => $row['store_price'],
            'qty'  => $row['qty'],
            'real_unit_price'  => $row['real_unit_price'],
            'unit_price'  => $row['unit_price'],
            'status' => $row['status'],
    ]);
    }
}
