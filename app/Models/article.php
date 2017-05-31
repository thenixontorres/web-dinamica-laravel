<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class article
 * @package App\Models
 * @version May 31, 2017, 6:46 pm UTC
 */
class article extends Model
{
    use SoftDeletes;

    public $table = 'articles';

    protected $dates = ['deleted_at'];

    //BelongsTo----------------------------------
    public function tag()
    {
        return $this->BelongsTo(tag::class);
    }

    //Has One
    public function thumb()
    {
        return $this->hasOne(thumb::class);
    }

    public $fillable = [
        'title',
        'content',
        'summary',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'summary' => 'string',
        'tag_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'summary' => 'required',
        'tag_id' => 'required'
    ];

    
}
