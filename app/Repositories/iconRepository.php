<?php

namespace App\Repositories;

use App\Models\icon;
use InfyOm\Generator\Common\BaseRepository;

class iconRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'css_value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return icon::class;
    }
}
