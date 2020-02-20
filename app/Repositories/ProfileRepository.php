<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\BaseRepository;

/**
 * Class ProfileRepository
 * @package App\Repositories
 * @version February 18, 2020, 7:40 am UTC
*/

class ProfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'dob',
        'ic_no'
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
        return Profile::class;
    }
}
