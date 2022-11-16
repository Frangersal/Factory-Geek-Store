<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='categories';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'name',
        'description',
        'logo',
    ];
}
