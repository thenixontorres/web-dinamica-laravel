<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class thumb
 * @package App\Models
 * @version May 31, 2017, 6:56 pm UTC
 */
class thumb extends Model
{
    use SoftDeletes;

    public $table = 'thumbs';
    

    protected $dates = ['deleted_at'];

    //BelongsTo----------------------------------
    public function article()
    {
        return $this->BelongsTo(article::class);
    }

    public $fillable = [
        'thumb',
        'article_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'thumb' => 'string',
        'article_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'thumb' => 'required',
        'article_id' => 'required'
    ];

    
}
