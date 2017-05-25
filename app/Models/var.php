<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class var
 * @package App\Models
 * @version May 25, 2017, 2:26 am UTC
 */
class var extends Model
{
    use SoftDeletes;

    public $table = 'vars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'var'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'var' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'var' => 'required'
    ];

    
}
