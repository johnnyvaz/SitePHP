<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'imagens';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'arquivo', 'ativo'];

    
}
