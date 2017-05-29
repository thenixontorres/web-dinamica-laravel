<?php

namespace App\Repositories;

use App\Models\section;
use InfyOm\Generator\Common\BaseRepository;

class sectionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'visibility',
        'name',
        'visibility',
        'page_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return section::class;
    }
}
