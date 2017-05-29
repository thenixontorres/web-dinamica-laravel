<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class img
 * @package App\Models
 * @version May 25, 2017, 2:20 am UTC
 */
class img extends Model
{
    use SoftDeletes;

    public $table = 'imgs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'img',
        'position',
        'visibility',
        'title',
        'subtitle',
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
        'img' => 'string',
        'position' => 'integer',
        'visibility' => 'integer',
        'title' => 'string',
        'subtitle' => 'string',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'position' => 'required',
        'visibility' => 'required',
        'section_id' => 'required'
    ];

    
}
