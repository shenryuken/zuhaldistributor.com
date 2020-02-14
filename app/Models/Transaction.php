<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version February 13, 2020, 5:47 am UTC
 *
 * @property \App\Models\Wallet wallet
 * @property \Illuminate\Database\Eloquent\Collection transfers
 * @property \Illuminate\Database\Eloquent\Collection transfer1s
 * @property string payable_type
 * @property integer payable_id
 * @property integer wallet_id
 * @property string type
 * @property integer amount
 * @property boolean confirmed
 * @property string meta
 * @property string uuid
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'payable_type',
        'payable_id',
        'wallet_id',
        'type',
        'amount',
        'confirmed',
        'meta',
        'uuid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'payable_type' => 'string',
        'payable_id' => 'integer',
        'wallet_id' => 'integer',
        'type' => 'string',
        'amount' => 'integer',
        'confirmed' => 'boolean',
        'meta' => 'string',
        'uuid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'payable_type' => 'required',
        'payable_id' => 'required',
        'type' => 'required',
        'amount' => 'required',
        'confirmed' => 'required',
        'uuid' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function wallet()
    {
        return $this->belongsTo(\App\Models\Wallet::class, 'wallet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transfers()
    {
        return $this->hasMany(\App\Models\Transfer::class, 'deposit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transfer1s()
    {
        return $this->hasMany(\App\Models\Transfer::class, 'withdraw_id');
    }
}
