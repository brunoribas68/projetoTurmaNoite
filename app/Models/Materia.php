<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nome_materia
 * @property string $area_de_estudo
 * @property string $created_at
 * @property string $updated_at
 */
class Materia extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nome_materia',
        'area_de_estudo',
        'created_at',
        'updated_at'
    ];

}
