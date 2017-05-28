<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class icon
 * @package App\Models
 * @version May 28, 2017, 11:25 pm UTC
 */
class icon extends Model
{
    use SoftDeletes;

    public $table = 'icons';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'css_value'
    ];

    public function services()
    {
        return $this->hasMany(service::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'css_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'css_value' => 'required'
    ];

    
}
