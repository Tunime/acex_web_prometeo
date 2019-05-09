<?php

namespace App\Repositories;

use App\Models\Curso;
use App\Repositories\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version May 9, 2019, 5:42 pm UTC
*/

class CursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'carrera_id',
        'nombre',
        'descripcion',
        'icono'
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
        return Curso::class;
    }
}
