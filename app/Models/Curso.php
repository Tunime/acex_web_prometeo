<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Curso
 * @package App\Models
 * @version May 9, 2019, 5:42 pm UTC
 *
 * @property integer user_id
 * @property integer carrera_id
 * @property string nombre
 * @property string descripcion
 * @property string icono
 */
class Curso extends Model
{
    use SoftDeletes;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'carrera_id',
        'nombre',
        'descripcion',
        'icono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'carrera_id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'icono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
