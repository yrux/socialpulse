<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table='blogs';
    public function image()
    {
        return $this->morphOne('App\Model\Image', 'imageable')->where('table_name', 'blogs');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
