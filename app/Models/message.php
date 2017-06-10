<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class message
 * @package App\Models
 * @version June 10, 2017, 2:38 am UTC
 */
class message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
    ];

    
}
