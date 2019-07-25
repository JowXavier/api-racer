<?php

namespace ApiRacer\Models\Traits\Corredor;

/**
 * Class CorredorScope
 *
 * @package ApiRacer\Models\Traits\CorredorScope
 */
trait CorredorScope
{
    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }
}