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
        'icon_id',
        'title',
        'description',
        'banner_ing',
        'content',
        'visibility',
        'section_id'
    ];

    //BelongsTo----------------------------------
    public function section()
    {
        return $this->BelongsTo(section::class);
    }

    public function icon()
    {
        return $this->BelongsTo(icon::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icon_id' => 'string',
        'title' => 'string',
        'description' => 'string',
        'banner_ing' => 'string',
        'content' => 'string',
        'visibility' => 'integer',
        'section_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'icon_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'content' => 'required', 
        'visibility' => 'required',
        'section_id' => 'required'
    ];

    
}
