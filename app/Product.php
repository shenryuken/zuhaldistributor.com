<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name','pic','desc','price','payment_link',
    ];
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    
}
