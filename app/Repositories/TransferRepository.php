<?php

namespace App\Repositories;

use App\Models\Transfer;
use App\Repositories\BaseRepository;

/**
 * Class TransferRepository
 * @package App\Repositories
 * @version February 13, 2020, 5:51 am UTC
*/

class TransferRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'from_type',
        'from_id',
        'to_type',
        'to_id',
        'status',
        'status_last',
        'deposit_id',
        'withdraw_id',
        'discount',
        'fee',
        'uuid'
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
        return Transfer::class;
    }
}
