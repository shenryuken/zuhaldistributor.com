<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transfer
 * @package App\Models
 * @version February 13, 2020, 5:51 am UTC
 *
 * @property \App\Models\Transaction deposit
 * @property \App\Models\Transaction withdraw
 * @property string from_type
 * @property integer from_id
 * @property string to_type
 * @property integer to_id
 * @property string status
 * @property string status_last
 * @property integer deposit_id
 * @property integer withdraw_id
 * @property integer discount
 * @property integer fee
 * @property string uuid
 */
class Transfer extends Model
{
    use SoftDeletes;

    public $table = 'transfers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'from_type',
        'from_id',
        'to_type',
        'to_id',
        'status',
        'status_last',
        'deposit_id',
        'withdraw_id',
        'discount',
        'fee',
        'uuid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from_type' => 'string',
        'from_id' => 'integer',
        'to_type' => 'string',
        'to_id' => 'integer',
        'status' => 'string',
        'status_last' => 'string',
        'deposit_id' => 'integer',
        'withdraw_id' => 'integer',
        'discount' => 'integer',
        'fee' => 'integer',
        'uuid' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'from_type' => 'required',
        'from_id' => 'required',
        'to_type' => 'required',
        'to_id' => 'required',
        'status' => 'required',
        'deposit_id' => 'required',
        'withdraw_id' => 'required',
        'discount' => 'required',
        'fee' => 'required',
        'uuid' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function deposit()
    {
        return $this->belongsTo(\App\Models\Transaction::class, 'deposit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function withdraw()
    {
        return $this->belongsTo(\App\Models\Transaction::class, 'withdraw_id');
    }
}
