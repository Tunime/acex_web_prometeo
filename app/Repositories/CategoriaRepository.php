<?php

namespace App\Repositories;

use App\Models\Categoria;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version May 9, 2019, 4:32 pm UTC
*/

class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'imagen'
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
        return Categoria::class;
    }
}
