<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Instrumento
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $marca_id
 * @property $categoria_id
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Instrumento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'marca_id' => 'required',
		'categoria_id' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','marca_id','categoria_id','foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    

}
