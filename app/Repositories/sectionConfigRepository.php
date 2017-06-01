<?php

namespace App\Repositories;

use App\Models\sectionConfig;
use InfyOm\Generator\Common\BaseRepository;

class sectionConfigRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'section_id',
        'multiImg',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sectionConfig::class;
    }
}
