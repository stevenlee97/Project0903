<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";
    function product(){
        return $this->belongsTo('App\Products', 'id_product', 'id');
        //id: other key
    }
}
