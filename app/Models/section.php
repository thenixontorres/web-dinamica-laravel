<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class section
 * @package App\Models
 * @version May 25, 2017, 2:10 am UTC
 */
class section extends Model
{
    use SoftDeletes;

    public $table = 'sections';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'visibility',
        'page_id'
    ];

    //BelongsTo----------------------------------
    public function page()
    {
        return $this->BelongsTo(page::class);
    }
    //Has One
    public function config()
    {
        return $this->hasOne(config::class);
    }

    public function content()
    {
        return $this->hasOne(content::class);
    }
    //Has many
    public function imgs()
    {
        return $this->hasMany(img::class);
    }
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
        'visibility' => 'integer',
        'name' => 'string',
        'visibility' => 'integer',
        'page_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'visibility' => 'required',
        'name' => 'required',
        'visibility' => 'required',
        'page_id' => 'required'
    ];

    
}
