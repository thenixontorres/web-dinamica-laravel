<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tag
 * @package App\Models
 * @version May 31, 2017, 7:25 pm UTC
 */
class tag extends Model
{
    use SoftDeletes;

    public $table = 'tags';
    

    protected $dates = ['deleted_at'];

    //Has Many
    public function articles()
    {
        return $this->hasMany(article::class);
    }

    public $fillable = [
        'category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category' => 'required'
    ];

    
}
