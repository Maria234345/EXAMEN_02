<?php

namespace App\Repositories;

use App\Models\Detalle;
use App\Repositories\BaseRepository;

/**
 * Class DetalleRepository
 * @package App\Repositories
 * @version September 30, 2021, 2:39 am UTC
*/

class DetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcita'
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
        return Detalle::class;
    }
}
