<?php

namespace App\Repositories;

use App\Models\Purchase;
use App\Repositories\BaseRepository;

/**
 * Class PurchaseRepository
 * @package App\Repositories
 * @version February 20, 2020, 4:12 am UTC
*/

class PurchaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bill_id',
        'user_id',
        'product_id'
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
        return Purchase::class;
    }
}
