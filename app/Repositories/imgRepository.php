<?php

namespace App\Repositories;

use App\Models\img;
use InfyOm\Generator\Common\BaseRepository;

class imgRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img',
        'position',
        'visibility',
        'title',
        'subtitle',
        'section_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return img::class;
    }
}
