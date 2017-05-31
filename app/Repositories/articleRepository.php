<?php

namespace App\Repositories;

use App\Models\article;
use InfyOm\Generator\Common\BaseRepository;

class articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'summary',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return article::class;
    }
}
