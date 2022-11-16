<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoCard extends Model
{
    use HasFactory;
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='info_cards';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'card_number',
        'card_name',
        'expiration_date',
        'user_id',
    ];
}
