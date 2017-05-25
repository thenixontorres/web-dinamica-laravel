<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class config
 * @package App\Models
 * @version May 25, 2017, 2:17 am UTC
 */
class config extends Model
{
    use SoftDeletes;

    public $table = 'configs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'count_img',
        'section_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'count_img' => 'integer',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'count_img' => 'required',
        'section_id' => 'required'
    ];

    
}
