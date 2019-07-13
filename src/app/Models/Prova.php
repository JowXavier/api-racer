<?php

namespace ApiRacer\Models;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    /**
     * Os atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'tipo',
        'data'
    ];

    /**
     * Os atributos que devem ser transformados em datas.
     *
     * @var array
     */
    protected $dates = [
        'data',
    ];
}
