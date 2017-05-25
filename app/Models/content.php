<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class content
 * @package App\Models
 * @version May 25, 2017, 2:15 am UTC
 */
class content extends Model
{
    use SoftDeletes;

    public $table = 'contents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'subtitle',
        'body',
        'button_text',
        'button_link',
        'visibility',
        'section_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'subtitle' => 'string',
        'body' => 'string',
        'button_text' => 'string',
        'button_link' => 'string',
        'visibility' => 'integer',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'visibility' => 'required',
        'section_id' => 'required'
    ];

    
}
