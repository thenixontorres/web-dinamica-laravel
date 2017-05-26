<?php

namespace App\Repositories;

use App\Models\constant;
use InfyOm\Generator\Common\BaseRepository;

class constantRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'var',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return constant::class;
    }
}
