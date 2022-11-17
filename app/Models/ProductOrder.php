<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;
    //Proteccion la tabla'answers_options' de la vista de los usuarios finales
    protected $table ='products_orders';
    //Datos de la tabla 'answers_options' que pueden ser llenados
    protected $fillable = [
        'unit_price',
        'quantity',
        'discount',
        'product_id',
        'order_id',
    ];
}
