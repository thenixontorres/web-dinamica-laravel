<?php

namespace App\Repositories;

use App\Models\content;
use InfyOm\Generator\Common\BaseRepository;

class contentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'subtitle',
        'body',
        'button_text',
        'button_link',
        'visibility',
        'section_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return content::class;
    }
}
