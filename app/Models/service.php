<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class service
 * @package App\Models
 * @version May 25, 2017, 2:23 am UTC
 */
class service extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'icon',
        'title',
        'description',
        'url',
        'visibility',
        'section_id'
    ];

    //BelongsTo----------------------------------
    public function section()
    {
        return $this->BelongsTo(section::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icon' => 'string',
        'title' => 'string',
        'description' => 'string',
        'url' => 'string',
        'visibility' => 'integer',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon' => 'required',
        'title' => 'required', 
        'visibility' => 'required',
        'section_id' => 'required'
    ];

    
}
