<?php

namespace App\Repositories;

use App\Models\social;
use InfyOm\Generator\Common\BaseRepository;

class socialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return social::class;
    }
}
