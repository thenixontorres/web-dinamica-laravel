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

    public function scopeBuscar($query, $title)
    {
        return $query->where('title','LIKE',"%$title%");
    }

    public $fillable = [
        'title',
        'content',
        'visibility',
        'slug',
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
        'slug' => 'string',
        'content' => 'string',
        'visibility' => 'integer',
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
        'visibility' => 'required',
        'summary' => 'required',
        'tag_id' => 'required'
    ];

    
}
