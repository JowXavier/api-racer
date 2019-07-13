<?php

namespace ApiRacer\Models\Traits\Corredor;

use ApiRacer\Models\Prova;

/**
 * Class CorredorRelationship
 *
 * @package ApiRacer\Models\Traits\CorredorRelationship
 */
trait CorredorRelationship
{
    /**
     * Obter o usuário que possui a prova.
     */
    public function provas()
    {
        return $this->belongsToMany(Prova::class, 'corredores_provas', 'corredor_id', 'prova_id');
    }

    /**
     * Obter o usuário que possui a prova.
     */
    public function resultados()
    {
        return $this->belongsToMany(Prova::class, 'resultados', 'corredor_id', 'prova_id');
    }
}