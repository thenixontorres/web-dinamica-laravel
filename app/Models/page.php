<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class page
 * @package App\Models
 * @version May 25, 2017, 1:48 am UTC
 */
class page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'url',
        'visibility'
    ];

    //Has Many
    public function sections()
    {
        return $this->hasMany(section::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'url' => 'string',
        'visibility' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'url' => 'required',
        'visibility' => 'required'
    ];

    
}
