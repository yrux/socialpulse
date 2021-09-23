<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table='products';
    protected $with = ['image'];
    protected $appends = ['d_price','formatted_price_discounted','currency'];
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'products');
    }
    public function getDPriceAttribute()
    {
        if($this->discount>0){
            return ($this->price-(($this->price/100)*$this->discount));
        }
        return $this->price;
    }
    public function getFormattedPriceDiscountedAttribute()
    {
        return number_format($this->d_price,2,'.',',');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function allimages(){
        return $this->hasMany('App\Model\imagetable','ref_id','id')
        ->where('table_name','like','%product%')->orderBy('type','asc');
    }
    public function category(){
        return $this->hasOne('App\Model\m_flag','id','category_id');
    }
    public function getCurrencyAttribute(){
        return '$';
    }
}
