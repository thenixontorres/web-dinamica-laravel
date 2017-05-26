<?php

namespace App\Repositories;

use App\Models\config;
use InfyOm\Generator\Common\BaseRepository;

class configRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'count_img',
        'section_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return config::class;
    }
}
