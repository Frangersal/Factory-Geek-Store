<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodShippingUser extends Model
{
    use HasFactory;
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='methods_shipping_users';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'methods_shipping_id',
        'user_id',
    ];
}
