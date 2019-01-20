<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table ="items";

	protected $fillable = ['id','code','name','category_id','price','image','tax','tax_method','quantity','barcode_symbology','type','alert_quantity','comment','discount','store_price','qty','real_unit_price','unit_price','status'];

	public $timestamps = false;



    

}
