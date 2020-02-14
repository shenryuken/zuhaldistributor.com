<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Wallet
 * @package App\Models
 * @version February 13, 2020, 5:50 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property string holder_type
 * @property integer holder_id
 * @property string name
 * @property string slug
 * @property string description
 * @property integer balance
 * @property integer decimal_places
 */
class Wallet extends Model
{
    use SoftDeletes;

    public $table = 'wallets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'holder_type',
        'holder_id',
        'name',
        'slug',
        'description',
        'balance',
        'decimal_places'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'holder_type' => 'string',
        'holder_id' => 'integer',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'balance' => 'integer',
        'decimal_places' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'holder_type' => 'required',
        'holder_id' => 'required',
        'name' => 'required',
        'slug' => 'required',
        'balance' => 'required',
        'decimal_places' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class, 'wallet_id');
    }
}
