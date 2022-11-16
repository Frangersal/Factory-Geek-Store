<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='articles';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'title',
        'picture',
        'publication_date',
        'article_text',
        'picture',
        'description',
        'user_id',
    ];
}
