<?php

namespace App\Repositories;

use App\Models\message;
use InfyOm\Generator\Common\BaseRepository;

class messageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'message'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return message::class;
    }
}
