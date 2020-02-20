<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App\Models
 * @version February 18, 2020, 7:40 am UTC
 *
 * @property string full_name
 * @property string dob
 * @property string ic_no
 */
class Profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'full_name',
        'dob',
        'ic_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'dob' => 'date',
        'ic_no' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
