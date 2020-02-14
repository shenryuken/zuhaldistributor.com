<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version February 13, 2020, 6:09 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection purchases
 * @property string name
 * @property string pic
 * @property string desc
 * @property string price
 * @property string payment_link
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'pic',
        'desc',
        'price',
        'payment_link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'pic' => 'string',
        'desc' => 'string',
        'price' => 'string',
        'payment_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function purchases()
    {
        return $this->hasMany(\App\Models\Purchase::class, 'product_id');
    }
}
