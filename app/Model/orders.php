<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table='orders';
    protected $appends = ['full_name','full_address'];
    public $primaryKey = 'id';
    protected $fillable = [
        'first_name','last_name','company_name','address','address2','city','email','phone',
        'total_products','subtotal','discount','total','user_id','order_status','is_deleted','is_active'
    ];
    public function products(){
        return $this->hasMany('App\Model\order_products','order_id','id');
    }
    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
    public function getFullAddressAttribute(){
        return $this->city.' '.$this->address.' '.$this->address2;
    }
}
