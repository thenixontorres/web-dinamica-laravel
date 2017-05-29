<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class social
 * @package App\Models
 * @version May 25, 2017, 2:25 am UTC
 */
class social extends Model
{
    use SoftDeletes;

    public $table = 'socials';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'icon',
        'page',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icon' => 'string',
        'page' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon' => 'required',
        'url' => 'required',
        'page' => 'page'
    ];

    
}
