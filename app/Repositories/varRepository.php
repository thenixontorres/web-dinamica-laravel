<?php

namespace App\Repositories;

use App\Models\var;
use InfyOm\Generator\Common\BaseRepository;

class varRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'var'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return var::class;
    }
}
