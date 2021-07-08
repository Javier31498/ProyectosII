<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preguntasl
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
class Preguntasl extends Model
{
  public $table = "preguntasl";

    static $rules = [
		'titulo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','descripcion','respuesta'];



}
