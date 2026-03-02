<?php

namespace App\Repositories;

use App\Models\Booking;
use App\Repositories\BaseRepository;

/**
 * Class BookingRepository
 * @package App\Repositories
 * @version March 2, 2026, 4:46 pm UTC
*/

class BookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bookingdate',
        'starttime',
        'endtime',
        'memberid',
        'courtid',
        'fee'
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
        return Booking::class;
    }
}
