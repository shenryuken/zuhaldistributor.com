<?php

namespace App\Repositories;

use App\Models\Wallet;
use App\Repositories\BaseRepository;

/**
 * Class WalletRepository
 * @package App\Repositories
 * @version February 13, 2020, 5:50 am UTC
*/

class WalletRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'holder_type',
        'holder_id',
        'name',
        'slug',
        'description',
        'balance',
        'decimal_places'
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
        return Wallet::class;
    }
}
