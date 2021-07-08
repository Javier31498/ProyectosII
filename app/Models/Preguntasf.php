<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preguntasf
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $respuesta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preguntasf extends Model
{
  public $table = "preguntasf";

    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
		'respuesta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','respuesta'];



}
