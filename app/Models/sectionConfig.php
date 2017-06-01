<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sectionConfig
 * @package App\Models
 * @version May 31, 2017, 11:25 pm UTC
 */
class sectionConfig extends Model
{
    use SoftDeletes;

    public $table = 'section_configs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'section_id',
        'structure',
        'imgs'
    ];

    //BelongsTo----------------------------------
    public function section()
    {
        return $this->BelongsTo(Section::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'section_id' => 'integer',
        'structure' => 'string',
        'imgs' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'section_id' => 'required',
        'structure' => 'required',
        'imgs' => 'required'
    ];

    
}
