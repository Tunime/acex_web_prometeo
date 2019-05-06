<?php

namespace App\Repositories;

use App\Models\Carrera;
use App\Repositories\BaseRepository;

/**
 * Class CarreraRepository
 * @package App\Repositories
 * @version May 6, 2019, 11:33 am UTC
*/

class CarreraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'categoria_id'
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
        return Carrera::class;
    }
}
