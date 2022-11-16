<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    //Proteccion la tabla'roles' de la vista de los usuarios finales
    protected $table ='roles';
    //--Funciones de manejo de relaciones--
    public function users()
    {
        // Relacion ('Role'/Rol) (Pertenece a / 1 a 1) ('User'/Usuario)
        return $this->belongsTo('App\User');
    }
}
