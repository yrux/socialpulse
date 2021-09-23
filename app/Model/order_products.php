<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order_products extends Model
{
    protected $table='order_products';
    public $primaryKey = 'id';
    protected $fillable = [
        'order_id','product_id','qty','price','discount','rowtotal'
    ];
    public function order(){
        return $this->belongsTo('App\Model\orders','order_id','id');
    }
    public function product(){
        return $this->belongsTo('App\Model\products','product_id','id');
    }
}
