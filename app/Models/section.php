<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class section
 * @package App\Models
 * @version May 25, 2017, 2:10 am UTC
 */
class section extends Model
{
    use SoftDeletes;

    public $table = 'sections';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'position',
        'name',
        'visibility',
        'page_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'position' => 'integer',
        'visibility' => 'integer',
        'name' => 'string',
        'visibility' => 'integer',
        'page_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'position' => 'required',
        'visibility' => 'required',
        'name' => 'required',
        'visibility' => 'required',
        'page_id' => 'required'
    ];

    
}
