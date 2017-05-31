<?php

namespace App\Repositories;

use App\Models\thumb;
use InfyOm\Generator\Common\BaseRepository;

class thumbRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'thumb',
        'article_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return thumb::class;
    }
}
