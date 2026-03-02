<?php

namespace App\Repositories;

use App\Models\Court;
use App\Repositories\BaseRepository;

/**
 * Class CourtRepository
 * @package App\Repositories
 * @version March 2, 2026, 4:46 pm UTC
*/

class CourtRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'surface',
        'floodlights',
        'indoor'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Court::class;
    }
}
