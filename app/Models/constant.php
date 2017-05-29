<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class constant
 * @package App\Models
 * @version May 26, 2017, 12:22 am UTC
 */
class constant extends Model
{
    use SoftDeletes;

    public $table = 'constants';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'var',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'var' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'var' => 'required',
        'value' => 'required'
    ];

    
}
